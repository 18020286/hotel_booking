<?php
$msg = "";

if(isset($_POST['booknow'])){

    $days =0;
    $day = dateDiff($_SESSION['arrival'],$_SESSION['departure']);  

   if($day <= 0){
      $totalprice = $_POST['ROOMPRICE'] *1;
      $days = 1;
    }else{
      $totalprice = $_POST['ROOMPRICE'] * $day;
      $days = $day;
    }
      addtocart($_POST['ROOMID'],$days, $totalprice,$_SESSION['arrival'],$_SESSION['departure'],0);
}
 

if(!isset($_SESSION['arrival'])){
   $_SESSION['arrival'] = date_create('Y-m-d');
}
if(!isset($_SESSION['departure'])) {
  $_SESSION['departure'] =  date_create('Y-m-d') ;
}

$query = "SELECT * FROM `tblroom` r ,`tblaccomodation` a WHERE r.`ACCOMID`=a.`ACCOMID`";

$accomodation = ' | ' . @$_GET['q'];

?>
  <div class="row">
        <div class="col">
          <div class="card-columns">

 
               
                <?php 
 
                  $arrival =  $_SESSION['arrival'];
                  $departure =  $_SESSION['departure'] ;

                  $mydb->setQuery($query);
                  $cur = $mydb->loadResultList(); 
                  foreach ($cur as $result) { 


// ============================================================================================================================
                $btn =  '
                 <div class="form-group">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12">
                            <input type="submit" class="button rooms_button" id="booknow" name="booknow" value="Book Now!"/>
                                                   
                           </div>
                        </div>
                      </div>';
                    
 
                ?>
                 <div>
                 <input type="hidden" name="ROOMPRICE" value="<?php echo $result->PRICE ;?>">
                  <input type="hidden" name="ROOMID" value="<?php echo $result->ROOMID ;?>">

                      <div class="card">
                        <img class="card-img-top"  src="<?php echo WEB_ROOT .'admin/mod_room/'.$result->ROOMIMAGE; ?>" alt="Room image description">
                        <div class="card-body">
                          <div class="rooms_title"><h2><?php echo $result->ROOM ;?> <?php echo $result->ACCOMODATION ;?></h2></div>
                          <div class="rooms_text">
                            <p><?php echo $result->ROOMDESC ;?></p>
                          </div>
                          <div class="rooms_list">
                            <ul>
                              <li class="d-flex flex-row align-items-center justify-content-start">
                                <img src="images/check.png" alt="">
                                <span>Number of Person : <?php echo $result->NUMPERSON ;?></span>
                              </li> 
                             <!--  <li class="d-flex flex-row align-items-center justify-content-start">
                                <img src="images/check.png" alt="">
                                <span>Remaining Rooms : <?php echo  $resNum ;?></span>
                              </li> -->
                            </ul>
                          </div>
                          <div class="rooms_price"><?php echo $result->PRICE.'$' ;?>/<span>Night</span></div>
                            <?php echo $btn ; ?>
                        </div>
                      </div>

                  

                  </div>

        
                <?php  
 
                 }

                ?>

              </div> 
          </div>
    
    
 </div>