<div class="margins">
    <!--login form-->
    <div class="content form">
        <h1>Subscribe</h1>
        <p>Subscribe to be the first to recibe news and discounts about out lates products.</p>
        <div class="msg">
            <?php
            //check error messages
            if (isset($_GET["error"])){                        
            echo '<div class="error">something went wrong. Try Again</div>';
            }
            ?>
        </div>

        <form method="POST" action="index.php" id="formSubscribe">
        <input type="hidden" name="controller" value="public" /><!--go to publicController-->
        <input type="hidden" name="action" value="doSubscribe"/>

            <div class="fieldgroup required">
                <label>Name</label>
                <input type="text" name="first_name" placeholder="First Name"/>
                <input type="text" name="last_name" placeholder="Last Name"/>               
                <div class="popup">                  
                    <p>Add your first and last name</p>
                </div>                    
            </div><!--.fieldgroup-->
            <div class="fieldgroup required">
                <label>Email</label>
                <input type="text" name="email" placeholder="Email"/>             
                <div class="popup">                  
                    <p>Add your email</p>
                </div>                    
            </div><!--.fieldgroup-->
            <div class="fieldgroup required">
                <label>Phone</label>
                <input type="text" name="phone" placeholder="Phone"/>             
                <div class="popup">                  
                    <p>Add your phone number</p>
                </div>                    
            </div><!--.fieldgroup-->
            <div class="fieldgroup required">
                <label>Age</label>
                <input type="text" name="age" placeholder="Age"/>             
                <div class="popup">                  
                    <p>Add your age</p>
                </div>                    
            </div><!--.fieldgroup-->
            <div class="fieldgroup required">
                <label>Select Country</label>
                <input type="text" name="Country" placeholder="Country"/>             
                <div class="popup">                  
                    <p>Add your Country</p>
                </div>                    
            </div><!--.fieldgroup-->
           
            <div class="fieldgroup ">
                <button type="submit" class="ctabtn">Submit</button>
            </div><!--.fieldgroup-->
        </form>
    </div><!--.content-->
</div><!--.margins-->

<!--Validate form-->
<script type="text/javascript" src="js/validate2.js"></script>  
<!--End of login-->