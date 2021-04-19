<!-- <?php if (
    $page_name=='homepage'
){?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script class="u-script" type="text/javascript" src="http://lifewaychristianacademy.sc.ke/galaxy_cyber1/jquery-1.9.1.min.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script> -->
  <script src="<?php echo base_url(); ?>components/assets/js/main.js"></script>
  <script class="u-script" type="text/javascript" src="http://lifewaychristianacademy.sc.ke/galaxy_cyber1/nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 3.9.3, nicepage.com">
          <script src = "https://code.jquery.com/jquery-3.5.1.js"></script> 
        <script src = "https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> 
        <script src = "https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script> 
        <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html"
}</script>
<?php }else{?>
    <script>    
            $(document).ready(function() {
            $('#example').DataTable();
            } );
        </script>

  <script src="<?php echo base_url(); ?>components/assets/js/compressed.js"></script>
  <script src="<?php echo base_url(); ?>components/assets/js/main.js"></script>
    <!-- <script src="<?php echo base_url(); ?>components/assets//switcher.js"></script> -->

<!-- dashboard libs -->

    <!-- dashboard init -->
    <?php if (
        $page_name=='disposed' || 
        $page_name=='gadgets' || 
        $page_name=='logs' ||  
        $page_name=='clients' ||
        $page_name=='disposes'
    ){?>
    <!-- This is data table -->
  
    <!-- end - This is for export functionality only -->
        <?php include "tables.php"?>
    <?php }?>
    <!-- <script src="<?php //echo base_url(); ?>components/assets/js/admin.js"></script> -->

        <?php if ($page_name=='dashboard'){?>
            <?php include "calendar.php"; ?>
            
        <?php }?>

        <?php if ($page_name=='login'){?>
            <script src="<?php echo base_url(); ?>components/customs/login.js"></script>
        <?php }?>
        <?php if ($page_name=='homepage'or$page_name=='clients'){?>
            <script src="<?php echo base_url(); ?>components/customs/register.js"></script>
        <?php }?>
        <?php if ($page_name=='profile'){?>
            <script src="<?php echo base_url(); ?>components/customs/profile.js"></script>
        <?php }?>
        <?php if ($page_name=='settings'){?>
            <script src="<?php echo base_url(); ?>components/customs/settings.js"></script>
        <?php }?>
        <?php if ($page_name=='gadgets'){?>
            <script src="<?php echo base_url(); ?>components/customs/gadgets.js"></script>
        <?php }?>
        <?php if ($page_name=='new'){?>
            <script src="<?php echo base_url(); ?>components/customs/new-dispose.js"></script>
        <?php }?>

<?php }?>

<?php 
        //get total segments
        $total_segments = $this->uri->total_segments();
        //$last_segment = $this->uri->segment($total_segments);
        if($total_segments==0){
        ?>
        
        
        <?php }else{?>
        
        
    	<?php }?>  
