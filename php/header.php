<?php
$user ="";
        if(isset($_SESSION['id'])){
                $user = $_SESSION['username'];
            }
   
 echo "
 
 <div class='container top'>

    <nav class='navbar  navbar-expand-lg'>
     <a class='navbar-brand' href='#'>
    Lycee Mandela
  </a>
         <button class='navbar-toggler navbar-light bg-light ' type='button' data-toggle='collapse' data-target='#navbarTogglerDemo03' aria-controls='navbarTogglerDemo03' aria-expanded='false' aria-label='Toggle navigation'>
           <span class='navbar-toggler-icon'></span>
         </button>
       
         <div class='collapse navbar-collapse' id='navbarTogglerDemo03'>

           <ul class='navbar-nav mr-auto mt-2 mt-lg-0'>
            
 <div class='btn-group'>
 <button type='button' class='btn dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
         Activites
 </button>
 <div class='dropdown-menu'>
         <a class='dropdown-item' href='loggedinpage.php'>Acceuil</a>
         <a class='dropdown-item' href='literaturfr.php'>Français</a>
         </div>
 </div>
 
 <div class='btn-group'>
         <button type='button' class='btn dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                 Documents
         </button>
         <div class='dropdown-menu'>
                 <a class='dropdown-item' href='mesDocuments.php'>Mes documents</a>
         </div>
         </div>
 
              <div class='btn-group'>
 <button type='button' class='btn dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
         Aide/Soutein 
 </button>
 <div class='dropdown-menu'>
 <a class='dropdown-item' href='faq.php'>Questions frequentes</a>
 </div>
 </div>
           </ul>
 
       
        <button type='button' class='btn btn-success '>
        <a href='pm_list.php' class='notification'>Messages <span class='badge badge-light'></span></a>
        </button>
     

        <div class='btn-group'>
        <button type='button' class='btn btn-danger dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
        $user
        </button>
        <div class='dropdown-menu'> <a class='dropdown-item' href='profil.php'>Profile</a>
        <a class='dropdown-item' href='index.php?logout=1'>Se déconnecter</a>
                 
        </div>
        </div>
                </div> 
        </nav>
        <button type='button' class='btn bleu'>Montrer le menu </button>
        
        </div>
 
 ";

?>

<script src="jquery.js"></script>

