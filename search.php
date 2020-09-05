<!DOCTYPE html>
<html>
  <html>
    <head>
      <title>Save Life Nepal | I donate | I Save</title>
      <link rel="icon" href="b.png" type="image/x-icon">
      <link rel="stylesheet" href="style.css" type="text/css" />
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
  </head>
  <style>
  
  th {
  background-color:#dc3545;
  color: #fff;
  
  }
  tr:nth-child(even) {
  background-color: #f2f2f2;
  height:45px;
  }
  tr:nth-child(odd) {
  color:#fff;
  height:45px;
  
  }
  </style>
</head>
<body class="login" >
  <div class="row ">
    <div class="col-xl-12 col-lg-12 col-md-12">
      
      
      <table class="table">
        <tr>
          <th>Name</th>
          <th>Blood Group</th>
          <th>District</th>
          <th>Email</th>
          <th>Contact no.</th>
        </tr>
        
        
        <?php
        $output = "";
        $blood ="";
        $district = "";
        if (isset($_POST['donate'])) {
        //connect database
        $mysqli = NEW Mysqli("localhost","root", "", "donor");
        $blood = $mysqli->real_escape_string($_POST['blood']);
        $district = $mysqli->real_escape_string($_POST['address']);
        //quert the database
        $resultSet =$mysqli->query("SELECT * FROM donor_list WHERE blood = '$blood' AND address='$district'");
        if($resultSet->num_rows >0){
        while($rows =$resultSet->fetch_assoc())
        {
        @$name =$rows['name'];
        @$blood =$rows['blood'];
        @$address =$rows['address'];
        @$email =$rows['email'];
        @$contact =$rows['contact'];
        @$output .="<tr>
          <td>$name</td>
          <td>$blood</td>
          <td>$address</td>
          <td>$email</td>>
          <td>$contact  <a href='tel:$contact' class='btn' style='background-color:#dc3545;
          color: #fff;' ><i class='fa fa-phone'>
          </i></a></td>
        </tr>
      ";
      }
      }else{
      @$output ="<p style='color:#fff'>Sorry !! no result found</p>";
      }
      }
      ?>
      
      
      <nav class="navbar navbar-danger bg-danger m-5">
        <a href="index.php" class="btn border-light navbar-left"><i class="fa fa-arrow-left"></i></a>
        <form  method="post">
          <div class="form-group">
            <select  class="custom-select" name="blood">
              <option value="">Choose Blood Group</option>
              <option value="A+ve" <?php if($blood == 'A+ve')echo 'selected="selected"';?>>A+ve</option>
              <option value="A-ve" <?php if($blood == 'A-ve')echo 'selected="selected"';?>>A-ve</option>
              <option value="B+ve" <?php if($blood == 'B+ve')echo 'selected="selected"';?>>B+ve</option>
              <option value="AB+ve" <?php if($blood == 'AB+ve')echo 'selected="selected"';?>>AB+ve</option>
              


              <option value="AB-ve" <?php if($blood == 'AB-ve')echo 'selected="selected"';?>>AB-ve</option>
              <option value="B-ve" <?php if($blood == 'B-ve')echo 'selected="selected"';?>>B-ve</option>
              <option value="O+ve" <?php if($blood == 'O+ve')echo 'selected="selected"';?>>O+ve</option>
              <option value="O-ve" <?php if($blood == 'O-ve')echo 'selected="selected"';?>>O-ve</option>
            </select>
          </div>
          <div class="form-group">
            <select  class="custom-select" name="address">
              <option value="">Choose District</option>
              <option value="Bhaktapur" <?php if($district == 'Bhaktapur')echo 'selected="selected"';?>>Bhaktapur         </option>
              <option value="Dhading" <?php if($district == 'Dhading')echo 'selected="selected"';?>>Dhading             </option>
              <option value="Kathmandu" <?php if($district == 'Kathmandu')echo 'selected="selected"';?>>Kathmandu           </option>
              <option value="Kavrepalanchok" <?php if($district == 'Kavrepalanchok')echo 'selected="selected"';?>>Kavrepalanchok      </option>
              <option value="Lalitpur" <?php if($district == 'Lalitpur')echo 'selected="selected"';?>>Lalitpur            </option>
              <option value="Nuwakot" <?php if($district == 'Nuwakot')echo 'selected="selected"';?>>Nuwakot             </option>
              <option value="Rasuwa" <?php if($district == 'Rasuwa')echo 'selected="selected"';?>>Rasuwa              </option>
              <option value="Sindhupalchok" <?php if($district == 'Sindhupalchok')echo 'selected="selected"';?>>Sindhupalchok       </option>
              <option value="Banke" <?php if($district == 'Banke')echo 'selected="selected"';?>>Banke               </option>
              <option value="Bardiya" <?php if($district == 'Bardiya')echo 'selected="selected"';?>>Bardiya             </option>
              <option value="Dailekh" <?php if($district == 'Dailekh')echo 'selected="selected"';?>>Dailekh             </option>
              <option value="Jajarkot" <?php if($district == 'Jajarkot')echo 'selected="selected"';?>>Jajarkot            </option>
              <option value="Surkhet" <?php if($district == 'Surkhet')echo 'selected="selected"';?>>Surkhet             </option>
              <option value="Baglung" <?php if($district == 'Baglung')echo 'selected="selected"';?>>Baglung             </option>
              <option value="Mustang" <?php if($district == 'Mustang')echo 'selected="selected"';?>>Mustang             </option>
              <option value="Myagdi" <?php if($district == 'Myagdi')echo 'selected="selected"';?>>Myagdi              </option>
              <option value="Parbat"<?php if($district == 'Parbat')echo 'selected="selected"';?>>Parbat              </option>
              <option value="Gorkha"<?php if($district == 'Gorkha')echo 'selected="selected"';?>>Gorkha              </option>
              <option value="Kaski"<?php if($district == 'Kaski')echo 'selected="selected"';?>>Kaski               </option>
              <option value="Lamjung"<?php if($district == 'Lamjung')echo 'selected="selected"';?>>Lamjung             </option>
              <option value="Manang"<?php if($district == 'Manang')echo 'selected="selected"';?>>Manang              </option>
              <option value="Syangja"<?php if($district == 'Syangja')echo 'selected="selected"';?>>Syangja             </option>
              <option value="Tanahu"<?php if($district == 'Tanahu')echo 'selected="selected"';?>>Tanahu              </option>
              <option value="Dhanusa"<?php if($district == 'Dhanusa')echo 'selected="selected"';?>>Dhanusa             </option>
              <option value="Dolakha"<?php if($district == 'Dolakha')echo 'selected="selected"';?>>Dolakha             </option>
              <option value="Mahottari"<?php if($district == 'Mahottari')echo 'selected="selected"';?>>Mahottari           </option>
              <option value="Ramechhap"<?php if($district == 'Ramechhap')echo 'selected="selected"';?>>Ramechhap           </option>
              <option value="Sarlahi"<?php if($district == 'Sarlahi')echo 'selected="selected"';?>>Sarlahi             </option>
              <option value="Sindhuli"<?php if($district == 'Sindhuli')echo 'selected="selected"';?>>Sindhuli            </option>
              <option value="Dolpa"<?php if($district == 'Dolpa')echo 'selected="selected"';?>>Dolpa               </option>
              <option value="Humla"<?php if($district == 'Humla')echo 'selected="selected"';?>>Humla               </option>
              <option value="Jumla"<?php if($district == 'Jumla')echo 'selected="selected"';?>>Jumla               </option>
              <option value="Kalikot"<?php if($district == 'Kalikot')echo 'selected="selected"';?>>Kalikot             </option>
              <option value="Mugu"<?php if($district == 'Mugu')echo 'selected="selected"';?>>Mugu                </option>
              <option value="Bhojpur"<?php if($district == 'Bhojpur')echo 'selected="selected"';?>>Bhojpur             </option>
              <option value="Dhankuta"<?php if($district == 'Dhankuta')echo 'selected="selected"';?>>Dhankuta            </option>
              <option value="Morang"<?php if($district == 'Morang')echo 'selected="selected"';?>>Morang              </option>
              <option value="Sankhuwasabha"<?php if($district == 'Sankhuwasabha')echo 'selected="selected"';?>>Sankhuwasabha       </option>
              <option value="Sunsari"<?php if($district == 'Sunsari')echo 'selected="selected"';?>>Sunsari             </option>
              <option value="Terhathum"<?php if($district == 'Terhathum')echo 'selected="selected"';?>>Terhathum           </option>
              <option value="Arghakhanchi"<?php if($district == 'Arghakhanchi')echo 'selected="selected"';?>>Arghakhanchi        </option>
              <option value="Gulmi"<?php if($district == 'Gulmi')echo 'selected="selected"';?>>Gulmi               </option>
              <option value="Kapilvastu"<?php if($district == 'Kapilvastu')echo 'selected="selected"';?>>Kapilvastu          </option>
              <option value="Nawalparasi"<?php if($district == 'Nawalparasi')echo 'selected="selected"';?>>Nawalparasi         </option>
              <option value="Palpa"<?php if($district == 'Palpa')echo 'selected="selected"';?>>Palpa               </option>
              <option value="Rupandehi"<?php if($district == 'Rupandehi')echo 'selected="selected"';?>>Rupandehi           </option>
              <option value="Baitadi"<?php if($district == 'Baitadi')echo 'selected="selected"';?>>Baitadi             </option>
              <option value="Dadeldhura"<?php if($district == 'Dadeldhura')echo 'selected="selected"';?>>Dadeldhura          </option>
              <option value="Darchula"<?php if($district == 'Darchula')echo 'selected="selected"';?>>Darchula            </option>
              <option value="Kanchanpur"<?php if($district == 'Kanchanpur')echo 'selected="selected"';?>>Kanchanpur          </option>
              <option value="Ilam"<?php if($district == 'Ilam')echo 'selected="selected"';?>>Ilam                </option>
              <option value="Jhapa"<?php if($district == 'Jhapa')echo 'selected="selected"';?>>Jhapa               </option>
              <option value="Panchthar"<?php if($district == 'Panchthar')echo 'selected="selected"';?>>Panchthar           </option>
              <option value="Taplejung"<?php if($district == 'Taplejung')echo 'selected="selected"';?>>Taplejung           </option>
              <option value="Bara"<?php if($district == 'Bara')echo 'selected="selected"';?>>Bara                </option>
              <option value="Chitwan"<?php if($district == 'Chitwan')echo 'selected="selected"';?>>Chitwan             </option>
              <option value="Makwanpur"<?php if($district == 'Makwanpur')echo 'selected="selected"';?>>Makwanpur           </option>
              <option value="Parsa"<?php if($district == 'Parsa')echo 'selected="selected"';?>>Parsa               </option>
              <option value="Rautahat"<?php if($district == 'Rautahat')echo 'selected="selected"';?>>Rautahat            </option>
              <option value="Dang"<?php if($district == 'Dang')echo 'selected="selected"';?>>Dang                </option>
              <option value="Pyuthan"<?php if($district == 'Pyuthan')echo 'selected="selected"';?>>Pyuthan             </option>
              <option value="Rolpa"<?php if($district == 'Rolpa')echo 'selected="selected"';?>>Rolpa               </option>
              <option value="Rukum"<?php if($district == 'Rukum')echo 'selected="selected"';?>>Rukum               </option>
              <option value="Salyan"<?php if($district == 'Salyan')echo 'selected="selected"';?>>Salyan              </option>
              <option value="Khotang"<?php if($district == 'Khotang')echo 'selected="selected"';?>>Khotang             </option>
              <option value="Okhaldhunga"<?php if($district == 'Okhaldhunga')echo 'selected="selected"';?>>Okhaldhunga         </option>
              <option value="Saptari"<?php if($district == 'Saptari')echo 'selected="selected"';?>>Saptari             </option>
              <option value="Siraha"<?php if($district == 'Siraha')echo 'selected="selected"';?>>Siraha              </option>
              <option value="Solukhumbu"<?php if($district == 'Solukhumbu')echo 'selected="selected"';?>>Solukhumbu          </option>
              <option value="Udayapur"<?php if($district == 'Udayapur')echo 'selected="selected"';?>>Udayapur            </option>
              <option value="Achham"<?php if($district == 'Achham')echo 'selected="selected"';?>>Achham              </option>
              <option value="Bajhang"<?php if($district == 'Bajhang')echo 'selected="selected"';?>>Bajhang             </option>
              <option value="Bajura"<?php if($district == 'Bajura')echo 'selected="selected"';?>>Bajura              </option>
              <option value="Doti"<?php if($district == 'Doti')echo 'selected="selected"';?>>Doti                </option>
              <option value="Kailali"<?php if($district == 'Kailali')echo 'selected="selected"';?>>Kailali             </option>
            </select>
          </div>
          
          <button class="btn border-light" style="background-color: #dc3545; color: #fff;" type="submit" name="donate" value="Search">Search</button>
          
        </form>
      </nav>
    </div>
    
    
    
    
    
    
    
    <?php echo $output; ?>
    
  </div>
</body>
</html>