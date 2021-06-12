<?php 
  include 'connect.php';
	if(isset($_REQUEST['q'])){
	 $q = $_REQUEST['q'];
	 
?>
 <div class="form-group">
                    <label for="Maintaince" class="col-sm-3 control-label">Maintaince Charge<b style="color: red" >*</b></label>
                   <div class="col-sm-4">
                        <select  name="service_charge"  id="service_charge" class="form-control">
                            <?php  
                                           $query=mysqli_query($con, "SELECT * FROM `service_detail`WHERE`service_type`='$q' ") or die(mysqli_error($con));
                                             while ($fet=mysqli_fetch_array($query)) {
                                   
                                    ?>
                                      <option selected="selected" value="<?php echo $fet['service_price']; ?>"><?php echo $fet['service_price']; ?></option>
                                   <?php } ?>
                          
                        </select>
                    </div>
                </div>
                <?php } ?>