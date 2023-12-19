<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('assets/js/template.js') }}"></script>
<script src="{{ asset('assets/js/settings.js') }}"></script>
<script src="{{ asset('assets/js/todolist.js') }}"></script>

<script>
  $(document).ready(function() {
    //for delete task
    $('#delete-task').on('click', function() {
      let taskId = $(this).data('task-id');
      if (confirm("Are you sure you want to delete this task?")) {
        $.ajax({
          url: '/task/delete/' + taskId,
          type: 'DELETE',
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function(response) {
            alert(response.message);
            location.reload();
          },
          error: function(xhr) {
            alert("Error deleting task!", xhr);
          }
        });
      }
    });

    //for complete task
    $('#complete-task').on('click', function() {
      let taskId = $(this).data('task-id');
      if (confirm("Are you sure you want to complete this task?")) {
        $.ajax({
          url: '/task/complete/' + taskId,
          type: 'POST',
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function(response) {
            alert(response.message);
            location.reload();
          },
          error: function(xhr) {
            alert("Error deleting task!", xhr);
          }
        });
      }
    });
  });
</script>