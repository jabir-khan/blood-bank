<?php include('register.php');?>
<!DOCTYPE html>
<head>
    <meta name="author" content="KHAN & Team">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Save Life Nepal | I donate | I Save</title>
    <link rel="icon" href="b.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" >    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="login"> 
    
    
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">


            <div class="col-xl-6 col-lg-6 col-md-6">
                 <a href="search.php" class="btn btn-danger btn-user btn-block mt-5">Search Blood <i class="fa fa-search"></i></a>

                <div class="card o-hidden border-0 shadow-lg my-3">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 m-4">Become a Donor</h1>
                            <p >Want to save a life ? Please fill the form & become a life saver. </p> 
                            <div class="alert alert-success alert-dismissible fade show  m-5" role="alert">
                                <p><?php echo $success ?></p>                                             
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>

                            <div class="alert alert-danger alert-dismissible fade show  m-5" role="alert">
                                <p><?php echo $email_error ?></p>                                             
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>     
                                 <div class="p-5">
                                    <form id="reg-form"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="user" >
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control form-control-user" placeholder=" Name" value="<?= $name ?>" >
                                            <span class="error"><?php echo $nameErr ?></span>
                                        </div>
                                        <div class="form-group">
                                            <select id="blood"  name="blood" class="form-control" value="<?= $blood ?>">
                                                <option >--Choose Blood Group--</option>
                                                <option value="A+ve">A+ve</option>
                                                <option value="A-Ve">A-Ve</option>
                                                <option value="B+ve">B+ve</option>
                                                <option value="B-ve">B-ve</option>
                                                <option value="AB+ve">AB+ve</option>
                                                <option value="AB-ve">AB-ve</option>
                                                <option value="O+ve">O+ve</option>
                                                <option value="O-ve">O-ve</option>
                                            </select>
                                             <span class="error"><?php echo $bloodErr ?></span>
                                        </div>
                                        <div class="form-group">
                                            
                                        <select id="address"  name="address" class="form-control"  value="<?= $address ?>" >
                                                
                                                <option >--Choose District--</option>
                                                <option value="Bhaktapur">Bhaktapur         </option>
                                                <option value="Dhading">Dhading             </option>
                                                <option value="Kathmandu">Kathmandu           </option>
                                                <option value="Kavrepalanchok">Kavrepalanchok      </option>
                                                <option value="Lalitpur">Lalitpur            </option>
                                                <option value="Nuwakot">Nuwakot             </option>
                                                <option value="Rasuwa">Rasuwa              </option>
                                                <option value="Sindhupalchok">Sindhupalchok       </option>
                                                <option value="Banke">Banke               </option>
                                                <option value="Bardiya">Bardiya             </option>
                                                <option value="Dailekh">Dailekh             </option>
                                                <option value="Jajarkot">Jajarkot            </option>
                                                <option value="Surkhet">Surkhet             </option>
                                                <option value="Baglung">Baglung             </option>
                                                <option value="Mustang">Mustang             </option>
                                                <option value="Myagdi">Myagdi              </option>
                                                <option value="Parbat">Parbat              </option>
                                                <option value="Gorkha">Gorkha              </option>
                                                <option value="Kaski">Kaski               </option>
                                                <option value="Lamjung">Lamjung             </option>
                                                <option value="Manang">Manang              </option>
                                                <option value="Syangja">Syangja             </option>
                                                <option value="Tanahu">Tanahu              </option>
                                                <option value="Dhanusa">Dhanusa             </option>
                                                <option value="Dolakha">Dolakha             </option>
                                                <option value="Mahottari">Mahottari           </option>
                                                <option value="Ramechhap">Ramechhap           </option>
                                                <option value="Sarlahi">Sarlahi             </option>
                                                <option value="Sindhuli">Sindhuli            </option>
                                                <option value="Dolpa">Dolpa               </option>
                                                <option value="Humla">Humla               </option>
                                                <option value="Jumla">Jumla               </option>
                                                <option value="Kalikot">Kalikot             </option>
                                                <option value="Mugu">Mugu                </option>
                                                <option value="Bhojpur">Bhojpur             </option>
                                                <option value="Dhankuta">Dhankuta            </option>
                                                <option value="Morang">Morang              </option>
                                                <option value="Sankhuwasabha">Sankhuwasabha       </option>
                                                <option value="Sunsari">Sunsari             </option>
                                                <option value="Terhathum">Terhathum           </option>
                                                <option value="Arghakhanchi">Arghakhanchi        </option>
                                                <option value="Gulmi">Gulmi               </option>
                                                <option value="Kapilvastu">Kapilvastu          </option>
                                                <option value="Nawalparasi">Nawalparasi         </option>
                                                <option value="Palpa">Palpa               </option>
                                                <option value="Rupandehi">Rupandehi           </option>
                                                <option value="Baitadi">Baitadi             </option>
                                                <option value="Dadeldhura">Dadeldhura          </option>
                                                <option value="Darchula">Darchula            </option>
                                                <option value="Kanchanpur">Kanchanpur          </option>
                                                <option value="Ilam">Ilam                </option>
                                                <option value="Jhapa">Jhapa               </option>
                                                <option value="Panchthar">Panchthar           </option>
                                                <option value="Taplejung">Taplejung           </option>
                                                <option value="Bara">Bara                </option>
                                                <option value="Chitwan">Chitwan             </option>
                                                <option value="Makwanpur">Makwanpur           </option>
                                                <option value="Parsa">Parsa               </option>
                                                <option value="Rautahat">Rautahat            </option>
                                                <option value="Dang">Dang                </option>
                                                <option value="Pyuthan">Pyuthan             </option>
                                                <option value="Rolpa">Rolpa               </option>
                                                <option value="Rukum">Rukum               </option>
                                                <option value="Salyan">Salyan              </option>
                                                <option value="Khotang">Khotang             </option>
                                                <option value="Okhaldhunga">Okhaldhunga         </option>
                                                <option value="Saptari">Saptari             </option>
                                                <option value="Siraha">Siraha              </option>
                                                <option value="Solukhumbu">Solukhumbu          </option>
                                                <option value="Udayapur">Udayapur            </option>
                                                <option value="Achham">Achham              </option>
                                                <option value="Bajhang">Bajhang             </option>
                                                <option value="Bajura">Bajura              </option>
                                                <option value="Doti">Doti                </option>
                                                <option value="Kailali">Kailali             </option>
                                        S</select>
                                         <span class="error"><?php echo $addressErr ?></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="email" id="email" placeholder="Email" value="<?= $email ?>">
                                             <span class="error"><?php echo $emailErr ?></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="contact" id="contact" placeholder="Contact" value="<?= $contact ?>" >
                                             <span class="error"><?php echo $contactErr ?></span>
                                        </div>
                                        
                                        
                                        <button style="background-color: #dc3545; color: #fff;" name="submit"  type="submit"  id="register" class="btn  btn-user btn-block">
                                        Become a donor
                                        </button>
                                        
                                    </form>

                                    <hr>                                 
                                  <div class="text-center">
                                    <a class="small" href="register">Register</a>
                                  </div>

                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.min.js" ></script>
<script src="js/jquery.min.js"></script>


<script >
    var success = '<?php echo $success ?>';
    var error = '<?php echo $email_error ?>';
    if(success !=""){
        $(".alert-success").delay(3000).slideUp(200, function() {
        $(this).alert('hide');
        });
    }else{
        $('.alert-success').hide();
    }

    if(error !=""){
        $(".alert-danger").delay(3000).slideUp(200, function() {
        $(this).alert('hide');
        });
    }else{
        $('.alert-danger').hide();
    }
</script>
   

 <a class="btn btn-danger btn-user btn-block text-white" > &copy; <script>document.write(new Date().getFullYear());</script> | All Rights Reserved</a>
    
</body>
</html>