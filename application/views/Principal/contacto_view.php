<section class="breadcumbs-info">
    <div class="container">
        <div class="row-fluid">
            <div class="col-sm-6">
                <h1>Contacto</h1>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb pull-right">                    	
                    <li><a href="<?php echo site_url('creintech') ?>">Principal</a> <span class="divider">/</span></li>
                    <li class="active">Contacto</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->

<section id="contact-info">        
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.0704016045377!2d-96.9097498!3d19.5295152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85db321d2ef25489%3A0xb675e3bf9f93c37c!2sCalle+M%C3%A9xico+34%2C+Pumar%2C+91040+Xalapa+Enr%C3%ADquez%2C+Vereda!5e0!3m2!1ses-419!2smx!4v1424887053414" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                	<h5>Lic. Denis Díaz Velázquez</h5>
                                	<p>Directora <br>
                                	Calle México No. 34, Colonia Pumar, CP 91040</p>                               	                                                              					   			  
			    					<p><a href="mailto:#">ddiaz@reintech.com.mx</a> <br>
									<abbr title="Phone">Teléfono:</abbr> (228) 2001512
			    					</p>					    			    			  
                                </address>

                                <address>
                                    <h5>Ing. Angela Beatríz Chávez Reyes</h5>
                                    <p>Vinculación <br>
                                    Calle México No. 34, Colonia Pumar, CP 91040</p>                                
                                    <p><abbr title="Phone">Teléfono:</abbr> (228) 2001512<br>
                                    <a href="mailto:#">achavez@reintech.com.mx</a> | <a href="mailto:#">cara0818@gmail.com</a></p>                                    
                                </address>
                            </li>


                            <li class="col-sm-6">
                                <address>
                                    <h5>LC. Yessica Gómez Apodaca</h5>
                                    <p>Administración <br>
                                    Calle México No. 34, Colonia Pumar, CP 91040</p>
                                    <p><abbr title="Phone">Teléfono:</abbr> (228) 2001512 <br>
                                    <a href="mailto:#">ygomez@reintech.com.mx</a></p>                                    
                                </address>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Envíanos tus dudas</h2>                
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nombre *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Correo *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Organización</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Mensaje *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enviar Mensaje</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->