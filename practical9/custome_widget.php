
<?php

class wpb_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
// Base ID of your widget
                'wpb_widget',
// Widget name will appear in UI
                __('YummayNHealthy', 'wpb_widget_domain'),
// Widget description
                array('description' => __('This widget will show contest and count of paricipants', 'wpb_widget_domain'),)
        );
    }
    //forn-end
    public function widget($args, $instance) {
        
         global $wpdb; 
        $sql="select selectcontest,count(id) as c from wp_participantdata group by selectcontest;
";
        $result=$wpdb->get_results($sql);
        ?>
<form>
    <table border="1">
        <tr>
            <th>
                Contetest
            </th>
            <th>
                Number of Participants
            </th>
        </tr>
        <tr>
            
        </tr>
        <?php
        foreach ($result as $d)
        {
            ?>
        <tr>
            <td>
                <a href="<?php echo admin_url('admin.php?page=add-members-slug-3&select='.$d->selectcontest);?>"><font color="blue">  <?php echo $d->selectcontest; ?> </font> </a >
            </td>
            <td>
             <?php echo $d->c; ?>   
            </td>
        </tr>
        <?php }
        ?>
    </table>
</form>

    <?php }
    //back-end
    public function form($instance)
    {
  
        
    }
}
function wpb_load_widget() {
    register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
?>

