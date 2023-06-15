<?php include 'includes/header.php'; ?>

<section class="products">
  <div class="container">
    <div class="row">

      <div class="col-md-12 pb-5 pt-5">
        <h2 class="page-heading"><span>All</span> Products</h2>


        <ul class="banner-menu">
          <li><a href="index.php">Home</a></li>
          <li><a>All Products</a> </li>
        </ul>
      </div>
      <!-- Filter Button Start -->
      <div class="col-md-3">

        <div class="flowers-wrap">
          <p><strong>Filter by Brand:</strong></p>
          <form class="pb-5">
            <label><input type="checkbox" name="fl-colour" value="aero" id="aero" /> Aero</label><br>
            <label><input type="checkbox" name="fl-colour" value="joylife" id="joylife" /> Joylife</label><br>
            <label><input type="checkbox" name="fl-colour" value="septiclean" id="septiclean" /> Septiclean</label><br>
            <label><input type="checkbox" name="fl-colour" value="comfort" id="comfort" /> Comfort</label>

          </form>
          <p><strong>Filter by Category</strong></p>
          <form class="pb-5">
            <label><input type="checkbox" name="fl-size" value="tiny" id="tiny" /> Healthcare Product</label><br>
            <label><input type="checkbox" name="fl-size" value="small" id="small" /> Surgical Products</label><br>
            <label><input type="checkbox" name="fl-size" value="medium" id="medium" /> Covid Care Products</label><br>
            <label><input type="checkbox" name="fl-size" value="large" id="large" /> Dialysis Products</label><br>
            <label><input type="checkbox" name="fl-size" value="giant" id="giant" /> Criticare Products</label>
            <label><input type="checkbox" name="fl-size" value="radiology" id="radiology" /> Radiology Products</label>
          </form>
          <p><strong>Filter by Sub-Category</strong></p>
          <form class="pb-5">
            <div><input type="checkbox" name="fl-cont" value="africa" id="africa" /> Africa </div>
            <div><input type="checkbox" name="fl-cont" value="europe" id="europe" />
              Europe</div>
            <div><input type="checkbox" name="fl-cont" value="asia" id="asia" />
              Asia</div>
            <div><input type="checkbox" name="fl-cont" value="north-america" id="north-america" />
              North America</div>
            <div><input type="checkbox" name="fl-cont" value="south-america" id="south-america" />
              South America </div>
            <label><input type="checkbox" name="fl-cont" value="antarctica" id="antarctica" />
              Antarctica</label>
            <div><input type="checkbox" name="fl-cont" value="australasia" id="australasia" />
              Australasia</div>
          </form>
        </div>

      </div>
      <!-- Filter Button End -->

      <!-- Products list Start -->
      <div class="col-md-9">
        <div class="row">
            <div class="col-md-4 thre-flower">
              
              <div class="flower " data-id="aloe" data-category=" small medium africa">
                <img src="assets/img/AERO-.jpg" alt="">
                <h3 class="text-box" data-maxlength="20">AERO PISTON NEBULIZER (REGULAR)</h3>
                <div class="view-pro-more">
                 <a href="single-products.php"> <p>View More</p></a> <button class="btn  btn-circle btn-circle-sm view-details-btn"><i class="fa-solid fa-chevron-right right-white-chevron"></i></button> 
                </div>
              </div>

            </div>

            <div class="col-md-4 thre-flower">
              <div class="flower" data-id="lavendar" data-category="comfort medium africa europe">
                <img src="assets/img/AERO-.jpg" alt="">
                <h3 class="text-box" data-maxlength="20">AERO PISTON NEBULIZER (REGULAR)</h3>
                <div class="view-pro-more">
                <a href="single-products.php">  <p>View More</p></a> <button class="btn  btn-circle btn-circle-sm view-details-btn"><i class="fa-solid fa-chevron-right right-white-chevron"></i></button>
                </div>
              </div>
            </div>

            <div class="col-md-4 thre-flower">
              <div class="flower" data-id="stinging-nettle" data-category="large africa europe asia">
                <img src="assets/img/AERO-.jpg" alt="">
                <h3 class="text-box" data-maxlength="20">AERO PISTON NEBULIZER (REGULAR)</h3>
                <div class="view-pro-more">
                <a href="single-products.php">  <p>View More</p></a> <button class="btn  btn-circle btn-circle-sm view-details-btn"><i class="fa-solid fa-chevron-right right-white-chevron"></i></button>
                </div>
              </div>
            </div>

            <div class="col-md-4 thre-flower">
              <div class="flower" data-id="gorse" data-category="joylife large europe">
                <img src="assets/img/AERO-.jpg" alt="">
                <h3 class="text-box" data-maxlength="20">AERO PISTON NEBULIZER (REGULAR)</h3>
                <div class="view-pro-more">
                <a href="single-products.php">  <p>View More</p> </a><button class="btn  btn-circle btn-circle-sm view-details-btn"><i class="fa-solid fa-chevron-right right-white-chevron"></i></button>
                </div>
              </div>
            </div>

            <div class="col-md-4 thre-flower">
              <div class="flower" data-id="hemp" data-category="green large asia">
                <img src="assets/img/AERO-.jpg" alt="">
                <h3 class="text-box" data-maxlength="20">AERO PISTON NEBULIZER (REGULAR)</h3>
                <div class="view-pro-more">
                <a href="single-products.php">  <p>View More</p></a> <button class="btn  btn-circle btn-circle-sm view-details-btn"><i class="fa-solid fa-chevron-right right-white-chevron"></i></button>
                </div>
              </div>
            </div>

            <div class="col-md-4 thre-flower">
              <div class="flower" data-id="titan-arum" data-category="comfort giant asia">
                <img src="assets/img/AERO-.jpg" alt="">
                <h3 class="text-box" data-maxlength="20">AERO PISTON NEBULIZER (REGULAR)</h3>
                <div class="view-pro-more">
                <a href="single-products.php">  <p>View More</p> </a><button class="btn  btn-circle btn-circle-sm view-details-btn"><i class="fa-solid fa-chevron-right right-white-chevron"></i></button>
                </div>
              </div>
            </div>

            <div class="col-md-4 thre-flower">
              <div class="flower" data-id="golden-wattle" data-category="joylife large australasia">
                <img src="assets/img/AERO-.jpg" alt="">
                <h3 class="text-box" data-maxlength="20">AERO PISTON NEBULIZER (REGULAR)</h3>
                <div class="view-pro-more">
                <a href="single-products.php">  <p>View More</p></a> <button class="btn  btn-circle btn-circle-sm view-details-btn"><i class="fa-solid fa-chevron-right right-white-chevron"></i></button>
                </div>
              </div>
            </div>

            <div class="col-md-4 thre-flower">
              <div class="flower" data-id="purple-prairie-clover" data-category="comfort medium north-america">
                <img src="assets/img/AERO-.jpg" alt="">
                <h3 class="text-box" data-maxlength="20">AERO PISTON NEBULIZER (REGULAR)</h3>
                <div class="view-pro-more">
                <a href="single-products.php"> <p>View More</p> </a><button class="btn  btn-circle btn-circle-sm view-details-btn"><i class="fa-solid fa-chevron-right right-white-chevron"></i></button>
                </div>
              </div>
            </div>

            <div class="col-md-4 thre-flower">
              <div class="flower" data-id="camellia" data-category="septiclean large north-america">
                <img src="assets/img/AERO-.jpg" alt="">
                <h3 class="text-box" data-maxlength="20">AERO PISTON NEBULIZER (REGULAR)</h3>
                <div class="view-pro-more">
                <a href="single-products.php">  <p>View More</p></a> <button class="btn  btn-circle btn-circle-sm view-details-btn"><i class="fa-solid fa-chevron-right right-white-chevron"></i></button>
                </div>
              </div>
            </div>

            <div class="col-md-4 thre-flower">
              <div class="flower" data-id="scarlet-carnation" data-category="aero medium north-america">
                <img src="assets/img/AERO-.jpg" alt="">
                <h3 class="text-box" data-maxlength="20">AERO PISTON NEBULIZER (REGULAR)</h3>
                <div class="view-pro-more">
                <a href="single-products.php"> <p>View More</p></a> <button class="btn  btn-circle btn-circle-sm view-details-btn"><i class="fa-solid fa-chevron-right right-white-chevron"></i></button>
                </div>
              </div>
            </div>

            <div class="col-md-4 thre-flower">
              <div class="flower" data-id="indian-paintbrush" data-category="red medium north-america">
                <img src="assets/img/AERO-.jpg" alt="">
                <h3 class="text-box" data-maxlength="20">AERO PISTON NEBULIZER (REGULAR)</h3>
                <div class="view-pro-more">
                <a href="single-products.php">  <p>View More</p></a> <button class="btn  btn-circle btn-circle-sm view-details-btn"><i class="fa-solid fa-chevron-right right-white-chevron"></i></button>
                </div>
              </div>
            </div>

            <div class="col-md-4 thre-flower">
              <div class="flower" data-id="moss-verbena" data-category="comfort small south-america">
                <img src="assets/img/AERO-.jpg" alt="">
                <h3 class="text-box" data-maxlength="20">AERO PISTON NEBULIZER (REGULAR)</h3>
                <div class="view-pro-more">
                <a href="single-products.php">  <p>View More</p></a> <button class="btn  btn-circle btn-circle-sm view-details-btn"><i class="fa-solid fa-chevron-right right-white-chevron"></i></button>
                </div>
              </div>
            </div>

            <div class="col-md-4 thre-flower">
              <div class="flower" data-id="climbing-dayflower" data-category="blue tiny south-america">
                <img src="assets/img/AERO-.jpg" alt="">
                <h3 class="text-box" data-maxlength="20">AERO PISTON NEBULIZER (REGULAR)</h3>
                <div class="view-pro-more">
                <a href="single-products.php">  <p>View More</p> </a><button class="btn  btn-circle btn-circle-sm view-details-btn"><i class="fa-solid fa-chevron-right right-white-chevron"></i></button>
                </div>
              </div>
            </div>

            <div class="col-md-4 thre-flower">
              <div class="flower" data-id="antarctic-pearlwort" data-category="joylife large antarctica">
                <img src="assets/img/AERO-.jpg" alt="">
                <h3 class="text-box" data-maxlength="5">AERO PISTON NEBULIZER (REGULAR)</h3>
                <div class="view-pro-more">
                <a href="single-products.php"> <p>View More</p></a> <button class="btn  btn-circle btn-circle-sm view-details-btn"><i class="fa-solid fa-chevron-right right-white-chevron"></i></button>
                </div>
              </div>
            </div>

            <div class="ld-more-block">
            <a href="" class="load-more">Load More</a>
            </div>
        </div>
      </div>


      <!-- Products list End -->
    </div>
  </div>
</section>



<?php include 'includes/footer.php'; ?> 