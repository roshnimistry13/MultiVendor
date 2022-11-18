<!DOCTYPE html>
<html>
 
<head>
<style>
.color-preview{
  display: inline-block;
  position: relative;
  height: 15px;
  width: 15px;
  margin-right: 6px;
  box-shadow: 1px 1px 5px rgba(0,0,0,0.3);
  border-radius: 25%;
  top: 3px;
}
.color-primary-bg{
  background: #f90;
}
.color-secondary-bg{
  background: #f50;
}
.color-tertiary-bg{
  background: #009;
}
.color-accent1-bg{
  background: #900;
}
.color-accent2-bg{
  background: #3f0;
}
</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.2/select2.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/3.2/select2.min.js"></script>
	
    
</head>
 
<body>
    <h1 style="color: green">
        GeeksforGeeks
    </h1>
 
    <!-- Using the attributes to style the
        <select> and <option> tag -->
    <select id="color-body-select" data-placeholder="Select a color:" name="sms_redux[assignment-color-body]" class="redux-select-item" style="width: 40%;">
  <option value="color-primary" data-id="123">Primary Color</option>
  <option value="color-secondary" data-id="1234">Secondary Color</option>
  <option value="color-tertiary" data-id="1235">Tertiary Color</option>
  <option value="color-accent1" data-id="1236">Accent #1</option>
  <option value="color-accent2" data-id="1237">Accent #2</option>
</select>

</body>
<script>
function format_select2_add_color_preview(value) {
    console.log(value.element);
    if (!value.id) return value.text; // to exclude optgroups
    return "<strong class='color-preview "+ value.id +"-bg'></strong>" + value.text;
}
$("#color-body-select").select2({
    formatResult: format_select2_add_color_preview,
    formatSelection: format_select2_add_color_preview,
    escapeMarkup: function(m) { return m; }
});
</script>
 
</html>