    <!-- ============================================================== -->
    <!-- Delete Modal START -->
    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function () {
          myInput.focus()
        })   
    </script>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Warning</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Are you Sure you want to Delete Permanently? <?php echo $DelID ?><br>
            Note:
            <b> YOU CANNOT RETRIEVE DELETED ACCOUNTS</b>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <a class="btn btn-danger" href="delete.php?Del=<?php echo $ID ?>">DELETE</a>
          </div>
        </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Delete Modal END -->