<div class = "user-lectures-index col">
  <?php echo $this->Html->link(__('<< トップページに戻る'), array('controller' => 'users_courses', 'action' => 'index'))?>
  <div class="card bg-light">
	  <div class="card-header"><?php echo h($lecture_list[$lecture_id]); ?></div>
	  <div class="card-body">
      <table class="responsive-table">
		    <thead>
		    	<tr>
		    		<th class="ib-col-date"><?php echo __('授業日'); ?></th>
		    		<th class="ib-col-date"><?php echo __('担当講師'); ?></th>
		    		<th class="ib-col-date"><?php echo __('出席状況'); ?></th>
		    		<th class="ib-col-center" style="width : 400px;"><?php echo __('単元名テキスト該当ページ'); ?></th>
		    		<th class="ib-col-center"><?php echo __('宿題'); ?></th>
		    	</tr>
		    </thead>
		    <tbody>
        <?php
          foreach($records as $record):
        ?>
          <tr>
            <?php $lecture_date = $record['LecturesRecord']['lecture_date']; ?>
            <td class="ib-col-date"><?php echo h($lecture_date); ?></td>
            <td class="ib-col-date"><?php echo h($user_list[$record['LecturesRecord']['docent_id']]); ?></td>
            <?php
              /** 出欠表示 */
              $attendance = '欠席';
              $status = $attendance_list[$lecture_date];
              if(isset($status)){
                if($status == 1){
                  $attendance = '出席';
                }
              }
            ?>
            <td class="ib-col-center"><?php echo h($attendance);?></td>
            <td class="ib-col-date"><?php echo nl2br($record['LecturesRecord']['text']);?></td>
            <td class="ib-col-center"><?php echo nl2br($record['LecturesRecord']['homework']); ?></td>
          </tr>
        <?php
          endforeach;
        ?>

        </tbody>
      </table>
    </div>
</div>