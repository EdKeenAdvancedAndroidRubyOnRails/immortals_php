$(document).ready(function() {
    var form = $("<div class='form-group'><label for='name'>Name</label><input type='text' class='form-control' name='name' placeholder='Product Name' /></div>" +
            "<div class='form-group'><label for='description'>Description</label><input type='textarea' class='form-control' name='description' placeholder='Add Description.' /></div>" +
            "<div class='form-group'><label for='price'>Price</label><input type='text' class='form-control' name='price' placeholder='Price in Dollars' /></div>" +
            "<div class='form-group'><label for='picture'>Picture:</label><input type='file' name='picture' id='picture' /><br />" +
            "<div><p>Images must be no larger than 250px x 250px for layout consistency.</p></div>" +
            "<div class='form-group'><label for='qty_on_hand'>Quantity On Hand: </label><input type='text' class='form-control' name='qty_on_hand' placeholder='Quantity On Hand' /></div>" +
            "<input type='submit' class='btn' value='Submit' name='submit_product' /><br /><br />");
    
    $("#button").click(function() {
        form.appendTo($("#add_product"));
    });

});