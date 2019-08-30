<!DOCTYPE html>
<html lang="en">
<head>
	<title> Inicio del Blog</title>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.css">
</head>


<!-- Modal -->
<div class="modal fade in" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<body>
	<div class="container">
		<header class="blog-header py-3">
        	<div class="row flex-nowrap justify-content-between align-items-center">
				<div class="col-9 text-center">
					<p class="blog-header-logo "> Hyster Blog</p>
				</div>
				<div>
					<a class="text-muted" href="#">Subscribe</a>
				</div>
				<div>
					<a class="btn btn-sm btn-outline-secondary" data-toggle="modal" href="#exampleModal">Sign up</a>
				</div>
			</div>
		</header>

		<div class="jumbotron p-3 p-md-1 text-white rounded bg-dark">
			<div class="text-center">
				<h5>Bienvenidos a las mejores noticias de Hyster</h5>
			</div>
		</div>
		<?php $this->load->library('pagination'); ?>
        <h1> <?= $this->pagination->create_links() ?> </h1>
		<div class="row mb-2">
	 <?php foreach($noticias as $key)
		{
			echo'
			<div class="col-md-6">
	          <div class="card flex-md-row mb-1 box-shadow h-md-250">
	            <div class="card-body d-flex flex-column align-items-start">
	              <strong class="d-inline-block mb-2 text-success">'.$key->fecha_noticia.'</strong>
	              <h3 class="mb-0">
	                <a class="text-dark" href="#">'.$key->titulo_noticia.'</a>
	              </h3>
	              <p class="card-text mb-auto">'.$key->desc_noticia.'</p>
	              <a href="# '.$key->id_noticia.'">Continue reading</a>
	            </div>
	            <img class="card-img-right flex-auto d-none d-md-block" src="'.$key->img_noticia.'" style="width: mb-auto; height: mb-auto;" alt="Card image cap">
	          </div>
	        </div>';
    	}
    	?>
    	</div>
	</div>

</body>
</html>

<style type="text/css">
	.blog-header {
	  line-height: 1;
	  border-bottom: 2px solid #e5e5e5;
	}
	.blog-header-logo {
	  font-family: "Playfair Display", Georgia;
	  font-size: 2.25rem;
	}
	.display-4 {
	  font-size: 1rem;
	}

</style>