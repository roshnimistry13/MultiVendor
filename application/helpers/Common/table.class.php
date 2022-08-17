<?php
/*
Copyright: 2009 ���, �����, ������.
Author: � ����� �����, �� ���� � ��������� ���� ����� ������ �� 25 ����� ��������� o_0
*/

class Table
{
    private $table;
    private $th;
    private $tr;
    private $type;
    private $colOptions;
    private $newColumns;

    function __construct ($data, $options = null)
    {
        $this->init($data, $options);
    }
    private function init($data, $options)
    {
        extract($options);
        if (!isset($type)) {
            $type = NULL;
        }

        if ($type == NULL) {
            $data = array ('table'     =>$table,
                'th'        =>array_keys($data[0]),
                'tr'        =>$data,
                'colOptions'=>$column,
                'newColumns'=>isset($newColumns)?$newColumns:NULL
            );

            if ($table['class'] == 'default')
            $data['table']['class'] = 'grid filter paginate';

        }
        switch ($type) {
            case 'json-file':
            if (file_exists ($data)) {
                $data = json_decode (file_get_contents ($data), true);
            }
            else {
                throw new Exception ('File $data not found');
            }
            break;
            case 'json':
            $data = json_decode ($data, true);
            break;

            case 'xml-file':
            if (file_exists ($data)) {
                $xml = new XmlToArray (file_get_contents ('data.xml'));
                $data= $xml->start ();
            }
            else {
                throw new Exception ('File $data not found');
            }
            break;

            case 'xml':
            $xml = new XmlToArray ($data);
            $data= $xml->start ();
            break;

            default:
            if (!(is_array ($data) && count ($data['tr']) > 0)) {
                throw new Exception ('Invalid array');
            }
        }
        $this->parse_input($data);

    }
    private function parse_input($data)
    {
        $this->table = $this->parse_parameters ($data ['table']);
        $this->th = $data ['th'];
        $this->tr = $data ['tr'];
        $this->colOptions = $data['colOptions'];
        $this->newColumns = $data['newColumns'];
    }

    private function parse_parameters ($data)
    {
        $str = "";
        if (is_array ($data)) {
            foreach ($data as $key=>$value) {
                $str .= ' '.trim ($key).'="'.trim ($value).'"';
            }
            return $str;
        }
        else {
            return $data;
        }
    }

    private function padding ($n = 1)
    {
        return str_repeat ('    ', $n);
    }

    public function export()
    {
        $table = "";

        $table .= '<table'.$this->table.'>';
        /* Creating TH tag */
        if (is_array ($this->th) && count ($this->th) > 0) {
            $table .= $this->padding ()."<thead>\n";

            $thNewColumn = $this->newColumns;

            foreach ($this->th as $value) {
                $found = false;
                if (!is_null($thNewColumn)) {
                    foreach ($thNewColumn as $newColumn) {
                        if ($newColumn["position"] == $value) {
                            $table .= $this->padding (2)."<th {$this->parse_parameters($newColumn["thAttr"])}>{$newColumn['header']}</th>\n";
                            $found = true;
                            break;
                        }
                    }
                }
                if ($found) {
                    array_shift($thNewColumn);
                }
                if (isset($this->colOptions[$value]['header']))
                $header = $this->colOptions[$value]['header'];
                else
                $header = $value;

                $table .= $this->padding (2)."<th {$this->parse_parameters($this->colOptions[$value])}>$header</th>\n";
            }

            $table .= $this->padding ()."</thead>\n";

        }

        /* creating TD tag */
        $table .= $this->padding ()."<tbody>\n";
        $sr = 0;
        foreach ($this->tr as $value) {
            $table .= $this->padding (2)."<tr id={$value['ID']} {$this->parse_parameters($this->colOptions['trAttr'])}>\n";
            if (!is_array($value[0])) {
                $col         = 0;
                $sr++;
                $tdNewColumn = $this->newColumns;

                foreach ($value as $val) {
                    $id    = $this->th[$col++];
                    $found = false;

                    if (!is_null($thNewColumn)) {
                        foreach ($tdNewColumn as $newColumn) {
                            if ($newColumn["position"] == $id) {

                                if ($newColumn["type"] == 'serial')
                                $control = $sr;
                                else
                                if (isset($newColumn["condition"])?$this->cond($newColumn["condition"],$newColumn["conditionType"],$value):true) {
                                    $control = $this->getControl($newColumn,$value);
                                }

                                else {
                                    $control = '';
                                }


                                $table .= $this->padding (2)."<td {$this->parse_parameters($newColumn['thAttr'])}>{$control}</td>\n";
                                $found = true;
                                break;
                            }
                        }
                        if ($found) {
                            array_shift($thNewColumn);
                        }
                    }
                    $table .= $this->padding (3)."<td id={$id} {$this->parse_parameters($this->colOptions[$id])} name={$id} {$this->parse_parameters($this->colOptions[$id])} style='{$newColumn['StyleOfTD']}'; title='$val';>$val</td>\n";
                }
            }
            else {
                $this->init($value,$this->type,NULL);
                $table .= $innerTable = $this->export();
            }
            $table .= $this->padding (2)."</tr>\n";
        }
        $table .= $this->padding ()."</tbody>\n</table>";
        return $table;
    }

    private function cond($conditions,$type,$tr)
    {
        $totalConditions = count($conditions);
        $matched         = 0;

        foreach ($conditions as $c) {
            extract($c);
            if (isset($var1["col"])) {
                $var_1 = $tr[$var1["col"]];
            }
            else
            if (isset($var1["val"])) {
                $var_1 = $var1["val"];
            }

            if (isset($var2["col"])) {
                $var_2 = $tr[$var2["col"]];
            }
            else
            if (isset($var2["val"])) {
                $var_2 = $var2["val"];
            }

            if (!isset($var_1) && !isset($var_2))
            return false;

            /* define new condition below when required */

            $map = array(
                ">"       => $var_1 > $var_2,
                "<"       => $var_1 < $var_2,
                "=="      => $var_1 == $var_2,
                "!="      => $var_1 != $var_2,
                ">="      => $var_1 >= $var_2,
                "<="      => $var_1 <= $var_2,
                "like"    => strstr($var_1 , $var_2),
                "not like"=> !strstr($var_1 , $var_2)
            );

            if ($map[$opr]) {
                $matched++;
            }
        }

        return     ($type == "or"?($matched > 0):($matched == $totalConditions));
    }
    private function getControl($control,$tr)
    {
        $c = "";
 $assetsUrl = ASSETSURL;
        if (isset($control['type']) && $control['type'] == 'link') {
            if (isset($control['attr']['href']) && isset($control['target'])) {
                $val = $tr[$control['target']];

                $control['attr']['href'] = "?".$control['attr']['href']. "=$val";
            }
            else
            if (isset($control['href'])) {
                $control['attr']['href'] = "?".$control['attr']['href'];
            } else
            if (isset($control['attr']['onclick'])) {

                $args = $this->toArgs($control['args'],$tr);
                $control['attr']['onclick'] .= "($args)";
            }
           
            $c = "<a {$this->parse_parameters($control['attr'])}><img align=left BorderColor=transparent border=0 
             width='25px' class='loading' src='{$assetsUrl}Images/Buttons/{$control['image']}.png' style='cursor:pointer;' /></a>";
        }else
        if (isset($control['type']) && $control['type'] == 'button') {


            $args = $this->toArgs($control['args'],$tr);
            $control['attr']['onclick'] .= "($args)";

            $c = "<button {$this->parse_parameters($control['attr'])}>{$control['header']}</button>";
        }else
        if (isset($control['type']) && $control['type'] == 'input') {

            if (isset($control['value']['col']))
            $val = $tr[$control['value']['col']];
            else
            if ($control['value'])
            $val = $control['value'];
            else
            $val = '';

            $c   = "<input {$this->parse_parameters($control['attr'])} value='$val'></input>";

        }
        if (isset($control['type']) && $control['type'] == 'data') {


            $c = $tr[$control['args']['val']];


        }


        return $c;
    }

    private function toArgs($args,$tr)
    {
        $a = array();
        if (isset($args['col'])) {

            foreach ($args['col'] as $col) {
                $a[] = is_numeric($tr[$col])?$tr[$col]:"'".addslashes($tr[$col])."'";
            }
        }
        if ($args['val']) {

            foreach ($args['val'] as $val) {
                $a[] = is_numeric($val)?$val:"'".addslashes($val)."'";
            }
        }

        $b = implode(",",$a);
        return $b;
    }
}

/**
* Author   : MA Razzaque Rupom (rupom_315@yahoo.com, rupom.bd@gmail.com)
* Version  : 1.0
* Modification: Ewg
* Date     : 02 March, 2006
* Purpose  : Creating Hierarchical Array from XML Data
* Released : Under GPL
*/

class XmlToArray
{
    var $xml = '';
    private $temp;

    function __construct ($xml)
    {
        $this->xml = $xml;
        $this->temp = $this->createArray ();
    }

    public function start ()
    {
        foreach ($this->temp['data']['tr']['0'] as $value) {
            $tr[] = $value['0'];
        }
        $data = array ('table'=>$this->temp['data']['table']['0'],'th'   =>$this->temp['data']['th']['0'],'tr'   =>$tr);
        return $data;
    }
    /**
    * _struct_to_array($values, &$i)
    *
    * This is adds the contents of the return xml into the array for easier processing.
    * Recursive, Static
    *
    * @access    private
    * @param    array  $values this is the xml data in an array
    * @param    int    $i  this is the current location in the array
    * @return    Array
    */

    function _struct_to_array($values, & $i)
    {
        $child = array();
        if (isset($values[$i]['value'])) array_push($child, $values[$i]['value']);

        while ($i++ < count($values)) {
            switch ($values[$i]['type']) {
                case 'cdata':
                array_push($child, $values[$i]['value']);
                break;

                case 'complete':
                $name = $values[$i]['tag'];
                if (!empty($name)) {
                    $child[$name] = ($values[$i]['value'])?($values[$i]['value']):'';
                    if (isset($values[$i]['attributes'])) {
                        $child[$name] = $values[$i]['attributes'];
                    }
                }
                break;

                case 'open':
                $name = $values[$i]['tag'];
                $size = isset($child[$name]) ? sizeof($child[$name]) : 0;
                $child[$name][$size] = $this->_struct_to_array($values, $i);
                break;

                case 'close':
                return $child;
                break;
            }
        }
        return $child;
    }//_struct_to_array

    /**
    * createArray($data)
    *
    * This is adds the contents of the return xml into the array for easier processing.
    *
    * @access    public
    * @param    string    $data this is the string of the xml data
    * @return    Array
    */
    function createArray()
    {
        $xml    = $this->xml;
        $values = array();
        $index = array();
        $array = array();
        $parser = xml_parser_create();
        xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
        xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
        xml_parse_into_struct($parser, $xml, $values, $index);
        xml_parser_free($parser);
        $i      = 0;
        $name   = $values[$i]['tag'];
        $array[$name] = isset($values[$i]['attributes']) ? $values[$i]['attributes'] : '';
        $array[$name] = $this->_struct_to_array($values, $i);
        return $array;
    }//createArray


}//XmlToArray