  <!-- Main Content Area -->
  <div class="content">
<table>
          <tr>
                <th>Name</th>
                <th>Quantity</th>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>

</table>

  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Launch demo modal</button>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


    <form method="post" action="<?= base_url('main/addItems') ?>" id="item-form">
        <table id="po_add" class="table table-striped">
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
            <tr>
                <td><input type="text" name="items[0][name]"></td>
                <td><input type="text" name="items[0][quantity]"></td>
                <td></td> <!-- Empty cell for the first row -->
            </tr>
        </table>


    



      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Save">
    </form>
        <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="Close">
      </div>
    </div>
  </div>
</div>






<script>
        $(document).ready(function() {
            var rowIndex = 1;

            $("#add-row").click(function() {
                var newRow = '<tr>' +
                                '<td><input type="text" name="items[' + rowIndex + '][name]"></td>' +
                                '<td><input type="text" name="items[' + rowIndex + '][quantity]"></td>' +
                                '<td><button type="button" class="remove-row">-</button></td>' +
                             '</tr>';
                $("#po_add").append(newRow);
                rowIndex++;
            });

            $(document).on("click", ".remove-row", function() {
                if ($("#po_add tr").length > 2) { // Check if there are more than 2 rows
                    $(this).closest("tr").remove();
                }
            });

            $("#item-form").submit(function() {
                var isValid = true;
                $("#po_add input[type='text']").each(function() {
                    if ($(this).val().trim() === "") {
                        isValid = false;
                        return false; // Break the loop if an empty field is found
                    }
                });

                if (!isValid) {
                    alert("Please fill out all fields before submitting.");
                    return false; // Prevent form submission
                }
            });
        });
    </script>













  </div>