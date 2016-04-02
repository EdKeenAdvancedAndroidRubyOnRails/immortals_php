$(document).ready(function() {
    var form = $("<div class='form-group'><label for='name'>Name</label><input type='text' class='form-control' name='name' placeholder='Product Name'></div>" +
            "<div class='form-group'><label for='description'>Description</label><input type='textarea' class='form-control' name='description' placeholder='Add Description.'></div>" +
            "<div class='form-group'><label for='manufacturerId'>Manufacturer Id</label><input type='text' class='form-control' name='description' placeholder='optional'></div>");
    
    $("#button").click(function() {
        form.appendTo($("#form"));
    });            
});