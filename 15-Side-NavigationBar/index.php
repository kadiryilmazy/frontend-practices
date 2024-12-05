<?php
include("./api.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0" />
   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
      integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="style.css">
   <title>Document</title>
</head>

<body>
   <div class="wrapper">
      <input type="checkbox" id="btn">
      <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
      </label>
      <nav id="sidebar">
         <div class="title">Side Menu</div>
         <ul class="list-items">
            <?php
            foreach ($links as $link) {
            ?>
               <li>
                  <a href="<?php echo $link['link']; ?>">
                     <i class="<?php echo $link['icon']; ?>"></i>
                     <?php echo $link['title']; ?></a>
               </li>
            <?php
            }
            ?>
            <div class="icons">
               <?php
               foreach ($socials as $social) {
               ?>


                  <a href="<?php echo $social['link'] ?>" target=" _blank">
                     <i class=" <?php echo $social['icon'] ?>">
                     </i>
                  </a>

               <?php
               }
               ?>
            </div>
         </ul>
      </nav>
   </div>
</body>

</html>