<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING); 
session_start();
$conn = mysqli_connect('localhost','root','123','Notebook');
$query = 'Select * from html_notes';
$result= mysqli_query($conn, $query);

if(isset($_SESSION['user_email']))
{
  include('header.php'); ?>

           <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">HTML Notes</h6>
                        <a href="add_html_notes.php"  class="show_all_button">Add HTML Notes</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">No.</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                     <th scope="col">Refrence Link</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 $i=1;   
                                while($row= mysqli_fetch_assoc($result))
                                {   
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row['title']; ?></td>
                                    <td><?php echo substr($row['description'],0,20); echo('...'); ?></td>
                                    <td><?php echo $row['refrence_link']; ?></td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <?php
                                }?>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

<?php include('footer.php');
}
else
{
    echo "No Page Found";
} ?>