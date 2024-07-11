<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
            <th scope="col">Date Modified</th>
            <th scope="col">Alter</th>
          </tr>
        </thead>
        <tbody>
        <?php
          session_start(); // Start the session if not already started
          $username = $_SESSION['username'];
          $conn = mysqli_connect("localhost", "root", "", "app");
          $sql = "SELECT title, date FROM notes WHERE username='$username'";
          $res = mysqli_query($conn, $sql);          
          if (mysqli_num_rows($res) > 0){ 
            while ($row = mysqli_fetch_assoc($res)) {
              echo "ji ";
                echo "<tr>
                        <td>" . $username . "</td>
                        <td>" . $row['title'] . "</td>
                        <td>" . $row['date'] . "</td>
                        <td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Del</button>
                        <td><button onclick>Update</button></td>
                    </tr>";
            }
          }
          ?>
          <!-- <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch Modal
              </button><button type="button" class="btn btn-danger">Danger</button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch Modal
              </button><button type="button" class="btn btn-danger">Danger</button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch Modal
              </button><button type="button" class="btn btn-danger">Danger</button>
            </td>
          </tr>
        </tbody>
      </table>

      
       -->
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>This is the content of the modal. You can put any HTML content here.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      




      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>


      
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
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
        </script>
</html>