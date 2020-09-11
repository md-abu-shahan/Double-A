<?php
    $active='Contact';
    include("includes/header.php");
?>

<div id="content"> <!-- #content Begin -->
    <div class="container"> <!-- container Begin -->
        <div class="col-md-12"> <!-- col-md-12 Begin -->

            <ul class="breadcrumb"> <!-- breadcrumb Begin -->
                <li>

                    <a href="index.php">Home</a>

                </li>
                <li>
                    Contact
                </li>
            </ul> <!-- breadcrumb finish -->

        </div> <!-- col-md-12 finish -->

        <div class="col-md-3"> <!-- col-md-3 Begin -->

            <?php 

                include("includes/sidebar.php")

            ?>

        </div> <!-- col-md-3 finish -->
                    
        <div class="col-md-9"> <!-- col-md-9 Begin -->

            <div class="box"> <!-- box Begin -->
                
                <div class="box-header"> <!-- box-header Begin -->
                    
                    <center> <!-- center Begin -->
                        
                        <h2> Feel free to Contact Us</h2>
                        
                        <p class="text-muted"> <!-- text-muted Begin -->
                            
                            If you have any questions, feel free to contact us. Our Customer Service work <strong>24/7</strong>
                            
                        </p> <!-- text-muted finish -->
                        
                    </center> <!-- center finish -->
                    
                    <form action="contact.php" method="post"> <!-- form Begin -->
                        
                        <div class="form-group"> <!-- form-group Begin -->
                            
                            <label>Name</label>
                            
                            <input type="text" class="form-control" name="name" required>
                            
                        </div> <!-- form-group finish -->
                        
                        <div class="form-group"> <!-- form-group Begin -->
                            
                            <label>Email</label>
                            
                            <input type="text" class="form-control" name="email" required>
                            
                        </div> <!-- form-group finish -->
                        
                        <div class="form-group"> <!-- form-group Begin -->
                            
                            <label>Subject</label>
                            
                            <input type="text" class="form-control" name="subject" required>
                            
                        </div> <!-- form-group finish -->
                        
                        <div class="form-group"> <!-- form-group Begin -->
                            
                            <label>Message</label>
                            
                            <textarea name="message" class="form-control"></textarea>
                            
                        </div> <!-- form-group finish -->
                        
                        <div class="text-center"> <!-- text-center Begin -->
                            
                            <button type="submit" name="submit" class="btn btn-primary">
                            
                                <i class="fa fa-user-md"></i> Send Message
                            
                            </button>
                            
                        </div> <!-- text-center finish -->
                        
                    </form> <!-- form finish -->
                    <?php
                          require 'phpmailer\PHPMailerAutoload.php';
                          $mail = new PHPMailer;

                          if (isset($_POST['submit'])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $subject = $_POST['subject'];
                            $message = $_POST['message'];

                            try {
                              $mail->isSMTP();
                              $mail->Host = 'smtp.gmail.com';
                              $mail->SMTPAuth = true;
                              // Gmail ID which you want to use as SMTP server
                              $mail->Username = 'abuhanifnumani123@gmail.com';
                              // Gmail Password
                              $mail->Password = 'Hanif1241';
                              $mail->Port = 587;

                              // Email ID from which you want to send the email
                              $mail->setFrom('$email');
                              // Recipient Email ID where you want to receive emails
                              $mail->addAddress('abuhanifnumani123@gmail.com');

                              $mail->isHTML(true);
                              $mail->Subject = 'Form Submission';
                              $mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message</h3>";

                              $mail->send();
                              $output = '<div class="alert alert-success">
                                          <h5>Thankyou! for contacting us, We\'ll get back to you soon!</h5>
                                        </div>';
                            } catch (Exception $e) {
                              $output = '<div class="alert alert-danger">
                                          <h5>' . $e->getMessage() . '</h5>
                                        </div>';
                            }
                          }
                       
                    ?>
                    
                </div> <!-- box-header finish -->
                
            </div> <!-- box finish -->

        </div> <!-- col-md-9 finish -->

    </div> <!-- container finish -->
</div> <!-- #content finish -->

<?php 

include("includes/footer.php")

?>

<script src = "js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>   