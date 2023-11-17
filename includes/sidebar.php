<div class="col-md-3 mt-5">
   <!-- Search Widget -->
<!-- <h4 class="widget-title mb-5">Don't <span>Miss</span></h4> -->

   <div class="card mb-4 border-0">
      <h5 class="card-header border-0 bg-white">Search</h5>
      <div class="card-body">
         <form name="search" action="search.php" method="post">
            <div class="input-group">
               <input type="text" name="searchtitle" class="form-control rounded-0" placeholder="Search for..." required>
               <span class="input-group-btn">
               <button class="btn btn-secondary rounded-0" type="submit"><i class="fa fa-search"></i></button>
               </span>
         </form>
         </div>
      </div>
   </div>
   
   <!-- Side Widget -->
   <div class="card my-4 border-0">
      <h5 class="card-header border-0 bg-white">Recent News</h5>
      <div class="card-body">
         <ul class="mb-0 list-unstyled">
            <?php
               $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostImage,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId limit 8");
               while ($row=mysqli_fetch_array($query)) {
               
               ?>
            <li class="d-flex mb-2 align-items-center">
               <img class="mr-2 rounded-circle" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>" width="50px" height="50px">
               <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="text-dark font-weight-bold"><?php echo htmlentities($row['posttitle']);?></a>
            </li>
            <?php } ?>
         </ul>
      </div>
   </div>
   <!-- Side Widget -->
   <div class="card my-4 border-0">
      <h5 class="card-header border-0 bg-white">Popular  News</h5>
      <div class="card-body">
         <ul class="list-unstyled">
            <?php
               $query1=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId  order by viewCounter desc limit 5");
               while ($result=mysqli_fetch_array($query1)) {
               
               ?>
            <li class="mb-2">
               <a href="news-details.php?nid=<?php echo htmlentities($result['pid'])?>" class="text-dark font-weight-bold"><?php echo htmlentities($result['posttitle']);?></a>
            </li>
            <?php } ?>
         </ul>
      </div>
   </div>
   <!-- Side Widget -->
   <div class="card my-4 border-0">
      <h5 class="card-header border-0 bg-white">Top Trending</h5>
      <div class="card-body">
         <ul class="mb-0 list-unstyled">
            <?php
               $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostImage,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId limit 8");
               while ($row=mysqli_fetch_array($query)) {
               
               ?>
            <li class="d-flex mb-2 align-items-center">
               <img class="mr-2 rounded" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>" width="50px" height="50px">
               <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="text-dark font-weight-bold"><?php echo htmlentities($row['posttitle']);?></a>
            </li>
            <?php } ?>
         </ul>
      </div>
   </div>
   <h5 class="card-header border-0 bg-transparent">Most Popular</h5>
   <div class="card my-4 border-0">
      <div class="card-body p-2">
      <iframe width="100%" height="180px" src="https://www.youtube.com/embed/Ne7u6JNfGDU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>      </div>
   </div>
   <div class="card my-4 border-0">
      <div class="card-body p-2">
      <iframe width="100%" height="180px" src="https://www.youtube.com/embed/abwLBZSlNCw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>      </div>
   </div>
   <div class="card my-4 border-0">
      <div class="card-body p-2">
      <iframe width="100%" height="180px" src="https://www.youtube.com/embed/zzfSJYOe1FE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>      </div>
   </div>
   <div class="card my-4 border-0">
      <div class="card-body p-2">
      <iframe width="100%" height="180px" src="https://www.youtube.com/embed/9NelQ_HDTXo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>      </div>
   </div>
   <div class="card my-4 border-0">
      <div class="card-body p-2">
      <iframe width="100%" height="180px" src="https://www.youtube.com/embed/laysiFAswv8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>      </div>
   </div>
</div>