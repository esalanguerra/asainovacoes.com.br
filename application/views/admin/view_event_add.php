<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Adicionar Evento</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/event" class="btn btn-primary btn-sm">Visualizar Todos</a>
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

			<?php echo form_open_multipart(base_url().'admin/event/add',array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Título do Evento <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="event_title" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Conteúdo do Evento (Curto) <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="event_content_short" style="height:80px;"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Conteúdo do Evento <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="event_content"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Data de Início <span>*</span></label>
							<div class="col-sm-2">
								<input type="text" class="form-control datepicker" name="event_start_date" value="<?php echo date('Y-m-d'); ?>">(Format: yy-mm-dd)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Data de Término <span>*</span></label>
							<div class="col-sm-2">
								<input type="text" class="form-control datepicker" name="event_end_date" value="<?php echo date('Y-m-d'); ?>">(Format: yy-mm-dd)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Event Location <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="event_location" style="height:100px;"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Local do Evento <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="event_map" style="height:100px;"></textarea>
							</div>
						</div>
				        <h3 class="seo-info">Foto e Banner</h3>
				        <div class="form-group">
				            <label for="" class="col-sm-2 control-label">Foto em Destaque *</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				                <input type="file" name="photo">
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="" class="col-sm-2 control-label">Banner *</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				                <input type="file" name="banner">
				            </div>
				        </div>
						<h3 class="seo-info">SEO Informação</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Título </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="meta_title" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Palavras-Chave </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_keyword" style="height:100px;"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Descrição </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" style="height:100px;"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Enviar</button>
							</div>
						</div>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</section>