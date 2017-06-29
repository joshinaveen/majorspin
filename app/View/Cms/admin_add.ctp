 
  
      
  <?php 

$html = '<section id="main-content">';

$html .= '<section class="wrapper">';

$html .= '<div class="row">';

$html .= '<div class="col-sm-12">';

$html .= '<section class="panel">';

$html .= '<header class="panel-heading">';

$html .= 'Add New Page';

$html .= '<span class="tools pull-right">';

$html .= '<a href="javascript:;" class="fa fa-chevron-down"></a>';

$html .= '<a href="javascript:;" class="fa fa-times"></a>';

$html .= '</span>';

$html .= '</header>';

$html .= '<div class="panel-body">';

echo $html;

?>

<div class="col-md-10">

        <section class="panel">

                <?php echo $this->Form->create('Cms',array('type'=>'file','id'=>'form','class'=>'form-horizontal')); ?>

                        <!--<input type="hidden" value="<?php echo $UserID; ?>" id="edit-user-id">-->

                        <div class="form-group">

                                <label class="col-lg-2 col-sm-4 control-label">Page Name</label>

                                <div class="col-lg-10">
                                <?php echo $this->Form->input('page_name',array('type'=>'text','class' => 'form-control', 'label' => false,  'div' => false ,'autocomplete'=>'off','placeholder'=>'Page Name'));  ?>
                                 </div>

                        </div>
                             <div class="form-group">

                                <label class="col-lg-2 col-sm-4 control-label">Url key</label>

                                <div class="col-lg-10">
                                <?php echo $this->Form->input('url_key',array('class' => 'form-control', 'label' => false,  'div' => false ,'autocomplete'=>'off','placeholder'=>'Url Key'));  ?>
                                 </div>

                        </div>
                             <div class="form-group">

                                <label class="col-lg-2 col-sm-4 control-label">Content</label>

                                <div class="col-lg-10">
                                <?php echo $this->Form->input('content',array('class' => 'form-control  validate[required] ckeditor', 'label' => false,  'div' => false));  ?>
                                 </div>

                        </div>
            <div class="form-group">

                                <label class="col-lg-2 col-sm-4 control-label">Page Media Url</label>

                                <div class="col-lg-10">
                                <?php echo $this->Form->input('media_url',array('class' => 'form-control', 'label' => false,  'div' => false ,'autocomplete'=>'off','placeholder'=>'Media Url'));  ?>
                                 </div>

                        </div>

                        <div class="form-group">

                                <div class="col-lg-offset-2 col-lg-10">

                                        <button type="submit" id="edit-user" class="btn btn-info">Save Page</button>

                                </div>

                        </div>

                        <div id="result"></div>

                </form>

        </section>

</div>
				
<?php 

$html = '</div>';

$html .= '</section>';

$html .= '</div>';

$html .= '</div>';

$html .= '</section>';

$html .= '</section>';



echo $html;

?>

<script>
  $(function(){
      $('.ckeditor').ckeditor(); 
  });
  </script>
      