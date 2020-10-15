<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li>
      <a href="<?php echo base_url('app/home') ?>">
        <i class="fa fa-home"></i> <span>Beranda</span>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-briefcase"></i>
        <span>Portfolio</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('app/produk') ?>"><i class="fa fa-circle-o"></i> Semua</a></li>
      </ul>
    </li>
    <li class="header">Additional</li>
    <li><a target="_blank" href="<?php echo base_url('/') ?>"><i class="fa fa-circle-o text-green"></i> <span>Homepage</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-danger"></i> <span>Logout</span></a></li>
  </ul>
</section>
<!-- /.sidebar -->
</aside>