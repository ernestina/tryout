<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row">
    <div class="col-12">
        <!--div class="loading-div"><img src="<?php //echo base_url().'assets/images/Spinner.gif';?>" ></div-->
        <!--div id="results"><!-- content will be loaded here --><!--/div-->
        <?php //var_dump($page_number); ?>
        <table cellspacing="30" class='table table-striped' border="1">
			<td align="center" >ID</td>
			<td align="center" >Nama Soal</td>
            
			<?php 
            foreach ($record as $item): ?>
                <tr>
					<td><?php echo $item->id; ?></td>
					<td><?php echo $item->soal; ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
    </div>
</div>
    <div class="row">
        <!-- Column -->
        <div class="col-12">
            <div class="card">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="p-20">
                            <h2 class="font-medium text-inverse">1. Title will be here</h2>
                            <h6 class="card-subtitle">Kategori: Bahasa Inggris</h6>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                            <form class="m-t-40" novalidate>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!--h5>Radio Buttons <span class="text-danger">*</span></h5-->
                                            <fieldset class="controls">
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" value="1" name="styled_radio" required id="styled_radio1" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Check Me</span> </label>
                                            </fieldset>
                                            <fieldset>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" value="2" name="styled_radio" id="styled_radio2" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Or Me</span> </label>
                                            </fieldset>
                                            <fieldset class="controls">
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" value="3" name="styled_radio" required id="styled_radio1" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Check Me</span> </label>
                                            </fieldset>
                                            <fieldset class="controls">
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" value="3" name="styled_radio" required id="styled_radio1" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Check Me</span> </label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-xs-right">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-secondary">Previous</button>
                                        <button type="button" class="btn btn-secondary">Next</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 b-l">
                        <div class="card-block">
                            <div class="row text-center">
                                <h4 class="font-medium text-inverse">Waktu Sisa:</h4>
                                
                                <div class="col-sm-12 m-t-20 m-b-40">
                                    <h1 >02:00:59</h1>
                                        <hr> </div>
                                
                            </div>
                            <div class="row">
                                <h4 class="font-medium text-inverse">Kategori:</h4>
                                <div class="col-sm-12 m-t-20 m-b-20">
                                    <form action="#">
                                        <div class="form-group">
                                            <!--label class="control-label">Category</label-->
                                            <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                <option value="Category 1">Category 1</option>
                                                <option value="Category 2">Category 2</option>
                                                <option value="Category 3">Category 5</option>
                                                <option value="Category 4">Category 4</option>
                                            </select>
                                        </div>
                                    </form>
                                    <table class="table">
                                        <!--thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>#</th>
                                                <th>First Name</th>
                                            </tr>
                                        </thead-->
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><i class="fa fa-check-circle fa-lg text-success"></i></td>
                                                <td>2</td>
                                                <td><i class="fa fa-check-circle fa-lg"></i></td>
                                                <td>3</td>
                                                <td><i class="fa fa-check-circle fa-lg"></i></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><i class="fa fa-check-circle fa-lg"></i></td>
                                                <td>5</td>
                                                <td><i class="fa fa-check-circle fa-lg"></i></td>
                                                <td>6</td>
                                                <td><i class="fa fa-check-circle fa-lg text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td><i class="fa fa-check-circle fa-lg"></i></td>
                                                <td>8</td>
                                                <td><i class="fa fa-check-circle fa-lg text-success"></i></td>
                                                <td>9</td>
                                                <td><i class="fa fa-check-circle fa-lg"></i></td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td><i class="fa fa-check-circle fa-lg"></i></td>
                                                <td>11</td>
                                                <td><i class="fa fa-check-circle fa-lg"></i></td>
                                                <td>12</td>
                                                <td><i class="fa fa-check-circle fa-lg"></i></td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td><i class="fa fa-check-circle fa-lg"></i></td>
                                                <td>14</td>
                                                <td><i class="fa fa-check-circle fa-lg"></i></td>
                                                <td>15</td>
                                                <td><i class="fa fa-check-circle fa-lg"></i></td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td><i class="fa fa-check-circle fa-lg"></i></td>
                                                <td>17</td>
                                                <td><i class="fa fa-check-circle fa-lg text-success"></i></td>
                                                <td>18</td>
                                                <td><i class="fa fa-check-circle fa-lg text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td><i class="fa fa-check-circle fa-lg text-success"></i></td>
                                                <td>20</td>
                                                <td><i class="fa fa-check-circle fa-lg text-success"></i></td>
                                                <td>21</td>
                                                <td><i class="fa fa-check-circle fa-lg text-success"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->