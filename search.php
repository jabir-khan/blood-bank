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
        $start ="";
        if (isset($_POST['donate'])) {
        //connect database
        $mysqli = NEW Mysqli("localhost","root", "", "donor");
        $start = $mysqli->real_escape_string($_POST['start']);
        $start1 = $mysqli->real_escape_string($_POST['start1']);
        //quert the database
        $resultSet =$mysqli->query("SELECT * FROM donor_list WHERE blood = '$start' AND address='$start1'");
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
      
      
      <nav class="navbar navbar-light bg-light m-5">
        <a href="index.php" class="btn btn-info navbar-left"><i class="fa fa-arrow-left"></i></a>
        <form  method="post">
          <div class="form-group">
            <select  class="custom-select" name="start">
              <option value="">Choose Blood Group</option>
              <option value="A+ve" <?php if($start == 'A+ve')echo 'selected="selected"';?>>A+ve</option>
              <option value="A-ve" <?php if($start == 'A-ve')echo 'selected="selected"';?>>A-ve</option>
              <option value="B+ve" <?php if($start == 'B+ve')echo 'selected="selected"';?>>B+ve</option>
              <option value="AB+ve" <?php if($start == 'AB+ve')echo 'selected="selected"';?>>AB+ve</option>
              


              <option value="AB-ve" <?php if($start == 'AB-ve')echo 'selected="selected"';?>>AB-ve</option>
              <option value="B-ve" <?php if($start == 'B-ve')echo 'selected="selected"';?>>B-ve</option>
              <option value="O+ve" <?php if($start == 'O+ve')echo 'selected="selected"';?>>O+ve</option>
              <option value="O-ve" <?php if($start == 'O-ve')echo 'selected="selected"';?>>O-ve</option>
            </select>
          </div>
          <div class="form-group">
            <select  class="custom-select" name="start1">
              <option value="">Choose District</option>
              <option value="Bhaktapur" <?php if($start == 'Bhaktapur')echo 'selected="selected"';?>>Bhaktapur         </option>
              <option value="Dhading" <?php if($start == 'Dhading')echo 'selected="selected"';?>>Dhading             </option>
              <option value="Kathmandu" <?php if($start == 'Kathmandu')echo 'selected="selected"';?>>Kathmandu           </option>
              <option value="Kavrepalanchok" <?php if($start == 'Kavrepalanchok')echo 'selected="selected"';?>>Kavrepalanchok      </option>
              <option value="Lalitpur" <?php if($start == 'Lalitpur')echo 'selected="selected"';?>>Lalitpur            </option>
              <option value="Nuwakot" <?php if($start == 'Nuwakot')echo 'selected="selected"';?>>Nuwakot             </option>
              <option value="Rasuwa" <?php if($start == 'Rasuwa')echo 'selected="selected"';?>>Rasuwa              </option>
              <option value="Sindhupalchok" <?php if($start == 'Sindhupalchok')echo 'selected="selected"';?>>Sindhupalchok       </option>
              <option value="Banke" <?php if($start == 'Banke')echo 'selected="selected"';?>>Banke               </option>
              <option value="Bardiya" <?php if($start == 'Bardiya')echo 'selected="selected"';?>>Bardiya             </option>
              <option value="Dailekh" <?php if($start == 'Dailekh')echo 'selected="selected"';?>>Dailekh             </option>
              <option value="Jajarkot" <?php if($start == 'Jajarkot')echo 'selected="selected"';?>>Jajarkot            </option>
              <option value="Surkhet" <?php if($start == 'Surkhet')echo 'selected="selected"';?>>Surkhet             </option>
              <option value="Baglung" <?php if($start == 'Baglung')echo 'selected="selected"';?>>Baglung             </option>
              <option value="Mustang" <?php if($start == 'Mustang')echo 'selected="selected"';?>>Mustang             </option>
              <option value="Myagdi" <?php if($start == 'Myagdi')echo 'selected="selected"';?>>Myagdi              </option>
              <option value="Parbat"<?php if($start == 'Parbat')echo 'selected="selected"';?>>Parbat              </option>
              <option value="Gorkha"<?php if($start == 'Gorkha')echo 'selected="selected"';?>>Gorkha              </option>
              <option value="Kaski"<?php if($start == 'Kaski')echo 'selected="selected"';?>>Kaski               </option>
              <option value="Lamjung"<?php if($start == 'Lamjung')echo 'selected="selected"';?>>Lamjung             </option>
              <option value="Manang"<?php if($start == 'Manang')echo 'selected="selected"';?>>Manang              </option>
              <option value="Syangja"<?php if($start == 'Syangja')echo 'selected="selected"';?>>Syangja             </option>
              <option value="Tanahu"<?php if($start == 'Tanahu')echo 'selected="selected"';?>>Tanahu              </option>
              <option value="Dhanusa"<?php if($start == 'Dhanusa')echo 'selected="selected"';?>>Dhanusa             </option>
              <option value="Dolakha"<?php if($start == 'Dolakha')echo 'selected="selected"';?>>Dolakha             </option>
              <option value="Mahottari"<?php if($start == 'Mahottari')echo 'selected="selected"';?>>Mahottari           </option>
              <option value="Ramechhap"<?php if($start == 'Ramechhap')echo 'selected="selected"';?>>Ramechhap           </option>
              <option value="Sarlahi"<?php if($start == 'Sarlahi')echo 'selected="selected"';?>>Sarlahi             </option>
              <option value="Sindhuli"<?php if($start == 'Sindhuli')echo 'selected="selected"';?>>Sindhuli            </option>
              <option value="Dolpa"<?php if($start == 'Dolpa')echo 'selected="selected"';?>>Dolpa               </option>
              <option value="Humla"<?php if($start == 'Humla')echo 'selected="selected"';?>>Humla               </option>
              <option value="Jumla"<?php if($start == 'Jumla')echo 'selected="selected"';?>>Jumla               </option>
              <option value="Kalikot"<?php if($start == 'Kalikot')echo 'selected="selected"';?>>Kalikot             </option>
              <option value="Mugu"<?php if($start == 'Mugu')echo 'selected="selected"';?>>Mugu                </option>
              <option value="Bhojpur"<?php if($start == 'Bhojpur')echo 'selected="selected"';?>>Bhojpur             </option>
              <option value="Dhankuta"<?php if($start == 'Dhankuta')echo 'selected="selected"';?>>Dhankuta            </option>
              <option value="Morang"<?php if($start == 'Morang')echo 'selected="selected"';?>>Morang              </option>
              <option value="Sankhuwasabha"<?php if($start == 'Sankhuwasabha')echo 'selected="selected"';?>>Sankhuwasabha       </option>
              <option value="Sunsari"<?php if($start == 'Sunsari')echo 'selected="selected"';?>>Sunsari             </option>
              <option value="Terhathum"<?php if($start == 'Terhathum')echo 'selected="selected"';?>>Terhathum           </option>
              <option value="Arghakhanchi"<?php if($start == 'Arghakhanchi')echo 'selected="selected"';?>>Arghakhanchi        </option>
              <option value="Gulmi"<?php if($start == 'Gulmi')echo 'selected="selected"';?>>Gulmi               </option>
              <option value="Kapilvastu"<?php if($start == 'Kapilvastu')echo 'selected="selected"';?>>Kapilvastu          </option>
              <option value="Nawalparasi"<?php if($start == 'Nawalparasi')echo 'selected="selected"';?>>Nawalparasi         </option>
              <option value="Palpa"<?php if($start == 'Palpa')echo 'selected="selected"';?>>Palpa               </option>
              <option value="Rupandehi"<?php if($start == 'Rupandehi')echo 'selected="selected"';?>>Rupandehi           </option>
              <option value="Baitadi"<?php if($start == 'Baitadi')echo 'selected="selected"';?>>Baitadi             </option>
              <option value="Dadeldhura"<?php if($start == 'Dadeldhura')echo 'selected="selected"';?>>Dadeldhura          </option>
              <option value="Darchula"<?php if($start == 'Darchula')echo 'selected="selected"';?>>Darchula            </option>
              <option value="Kanchanpur"<?php if($start == 'Kanchanpur')echo 'selected="selected"';?>>Kanchanpur          </option>
              <option value="Ilam"<?php if($start == 'Ilam')echo 'selected="selected"';?>>Ilam                </option>
              <option value="Jhapa"<?php if($start == 'Jhapa')echo 'selected="selected"';?>>Jhapa               </option>
              <option value="Panchthar"<?php if($start == 'Panchthar')echo 'selected="selected"';?>>Panchthar           </option>
              <option value="Taplejung"<?php if($start == 'Taplejung')echo 'selected="selected"';?>>Taplejung           </option>
              <option value="Bara"<?php if($start == 'Bara')echo 'selected="selected"';?>>Bara                </option>
              <option value="Chitwan"<?php if($start == 'Chitwan')echo 'selected="selected"';?>>Chitwan             </option>
              <option value="Makwanpur"<?php if($start == 'Makwanpur')echo 'selected="selected"';?>>Makwanpur           </option>
              <option value="Parsa"<?php if($start == 'Parsa')echo 'selected="selected"';?>>Parsa               </option>
              <option value="Rautahat"<?php if($start == 'Rautahat')echo 'selected="selected"';?>>Rautahat            </option>
              <option value="Dang"<?php if($start == 'Dang')echo 'selected="selected"';?>>Dang                </option>
              <option value="Pyuthan"<?php if($start == 'Pyuthan')echo 'selected="selected"';?>>Pyuthan             </option>
              <option value="Rolpa"<?php if($start == 'Rolpa')echo 'selected="selected"';?>>Rolpa               </option>
              <option value="Rukum"<?php if($start == 'Rukum')echo 'selected="selected"';?>>Rukum               </option>
              <option value="Salyan"<?php if($start == 'Salyan')echo 'selected="selected"';?>>Salyan              </option>
              <option value="Khotang"<?php if($start == 'Khotang')echo 'selected="selected"';?>>Khotang             </option>
              <option value="Okhaldhunga"<?php if($start == 'Okhaldhunga')echo 'selected="selected"';?>>Okhaldhunga         </option>
              <option value="Saptari"<?php if($start == 'Saptari')echo 'selected="selected"';?>>Saptari             </option>
              <option value="Siraha"<?php if($start == 'Siraha')echo 'selected="selected"';?>>Siraha              </option>
              <option value="Solukhumbu"<?php if($start == 'Solukhumbu')echo 'selected="selected"';?>>Solukhumbu          </option>
              <option value="Udayapur"<?php if($start == 'Udayapur')echo 'selected="selected"';?>>Udayapur            </option>
              <option value="Achham"<?php if($start == 'Achham')echo 'selected="selected"';?>>Achham              </option>
              <option value="Bajhang"<?php if($start == 'Bajhang')echo 'selected="selected"';?>>Bajhang             </option>
              <option value="Bajura"<?php if($start == 'Bajura')echo 'selected="selected"';?>>Bajura              </option>
              <option value="Doti"<?php if($start == 'Doti')echo 'selected="selected"';?>>Doti                </option>
              <option value="Kailali"<?php if($start == 'Kailali')echo 'selected="selected"';?>>Kailali             </option>
            </select>
          </div>
          
          <button class="btn" style="background-color: #dc3545; color: #fff;" type="submit" name="donate" value="Search">Search</button>
          
        </form>
      </nav>
    </div>
    
    
    
    
    
    
    
    <?php echo $output; ?>
    
  </div>
</body>
</html>