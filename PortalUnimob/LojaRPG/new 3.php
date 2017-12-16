 <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Data Abertura</th>
                                                <th>Título</th>
                                                <th>Analista</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                            <tr>
                                                <td><a href="ticket.php?ticket=<?php echo $aberto['ID']?>"><?php echo $aberto['ID']?></a></td>
                                                <td><a href="ticket.php?ticket=<?php echo $aberto['ID']?>"><?php echo $aberto['DATA']?></a></td>
                                                <td><a href="ticket.php?ticket=<?php echo $aberto['ID']?>"><?php echo $aberto['TITULO']?></a></td>
                                                <td><a href="ticket.php?ticket=<?php echo $aberto['ID']?>"><?php echo $aberto['ULTIMO_ATENDENTE']?></a></td>
                                                <td><a href="ticket.php?ticket=<?php echo $aberto['ID']?>"><span <?php if($aberto['IDSTATUS'] == 4){
                                                		 echo  "class='btn btn-danger'";}
														 	elseif($aberto['IDSTATUS'] == 7){
																	  echo "class='btn btn-success'";}else{
																		  									echo "class='btn btn-info'";
																		  									}?>><?php echo $aberto['STATUS']?></span></a></td>
                                            </tr>
                                           
                                        </tbody>
                                        
                                    </table>
									
									
									
									   <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": true,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
		
		<script src="<?php echo  $dominio?>js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo  $dominio?>js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>