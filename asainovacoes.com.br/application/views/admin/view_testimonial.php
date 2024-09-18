<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Lista de Depoimentos</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/testimonial/add" class="btn btn-primary btn-sm">Adicionar Depoimento</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">

			<?php
	        if($this->session->flashdata('error')) {
	            ?>
				<div class="callout callout-danger">
					<p><?php echo $this->session->flashdata('error'); ?></p>
				</div>
	            <?php
	        }
	        if($this->session->flashdata('success')) {
	            ?>
				<div class="callout callout-success">
					<p><?php echo $this->session->flashdata('success'); ?></p>
				</div>
	            <?php
	        }
	        ?>

	        
			<div class="box box-info">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="30">N°</th>
								<th>Foto</th>
								<th width="100">Nome</th>
								<th width="100">Designação</th>
								<th>Comentário</th>
								<th width="80">Ações</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;							
							foreach ($testimonial as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td style="width:130px;"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>" style="width:120px;"></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['designation']; ?></td>
									<td><?php echo $row['comment']; ?></td>
									<td>										
										<a href="<?php echo base_url(); ?>admin/testimonial/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Editar</a>
										<a href="<?php echo base_url(); ?>admin/testimonial/delete/<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Deletar</a>
									</td>
								</tr>
								<?php
							}
							?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


</section>