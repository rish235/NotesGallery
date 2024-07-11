<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  </head>
<body>
    <!-- As a link -->

<nav class="navbar bg-body-tertiary text-center">
    <div class="container-fluid">
      <a class="navbar-brand navvy" href="#">Notes List</a>
    </div>
  </nav>

  
  <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">User</th>
            <th scope="col">Note Title</th>
            <th scope="col">Notes</th>
            <th scope="col">Date Modified</th>
            <th scope="col">Alter</th>
          </tr>
        </thead>
        <tbody>
        <?php
        
        session_start(); // Start the session if not already started
        $username = $_SESSION['username'];
        $conn = mysqli_connect("localhost", "root", "", "app");
        $sql = "SELECT title,notes, date FROM notes WHERE username = '$username'";
        $res = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($res) > 0){
            while ($row = mysqli_fetch_assoc($res)) {
              // session_start();
              $_SESSION['username']=$username;
                echo "<tr>
                        <td> ✒️ </td>
                        <td>" . $username . "</td>
                        <td>" . $row['title'] . "</td>
                        <td>" . $row['notes'] . "</td>
                        <td>" . $row['date'] . "</td>
                        <td>
                        <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
                        Delete
                          </button>
                        </tr>";
            }
        }

        echo "<tr>
                        <td> ✒️ </td>
                        <td>" . $username . "</td>
                        <form action='add_note.php' method='post'>
                        <td><input name='title' type='text' id='titleInput'></td>
                        <td><div class='form-floating'>
                        <textarea name='notes' class='form-control' placeholder='Leave a comment here' id='floatingTextarea2' style='height: 100px; width: 300px;'></textarea>
                        <label for='floatingTextarea2'Comments</label>
                      </div></td>
                        <td><span id='dateToday'>-</span></td>
                        <td><button type='submit' id='add-notes' class='btn btn-primary'>
                        Add Notes
                      </button></td>
                      </form>
            </tr>";
        ?>
    </table>
    

    

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Note</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action='delete_notes.php' method='post'>
      <div class="modal-body">
        <input name='title' type='text' placeholder='enter the title of the note you want to delete'>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
  

      <!-- Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

</body>
<style>
    button{
        margin: 5px;
    }
    .navvy{
        padding-left: 600px;
    }
    </style>
    
<script>
    

    $document.ready(function(){
      $("")
    })
   
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
        function fun(title) {
            if (confirm("Are you sure you want to delete this note?")) {
              $.ajax({
                url: 'delete_notes.php',
                type: 'POST',
                data: { title: title },
                success: function(response) {
                    // Handle the response, if needed
                    // For example, you can reload the page to reflect the changes
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    // Handle errors
                }
            });
        }
    }
</script>


        
</html>