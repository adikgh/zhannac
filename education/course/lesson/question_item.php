<? $question_item_id = $sql['question_item_id']; ?>
<? $question_item = db::query("select * from question_item where id = '$question_item_id'"); ?>
<? $question_item_d = mysqli_fetch_assoc($question_item); ?>

<? $question_answer_item = db::query("select * from question_answer_item where user_id = '$user_id' and question_item_id = '$question_item_id' and lesson_id = $lesson_id"); ?>
<div class="lsb_i " data-number="<?=$sql['number']?>" data-type="<?=$sql['type']?>">
   <div class="lsb_ic">
      <div class="lsb_it_name"><?=$question_item_d['name']?></div>

      <? if (mysqli_num_rows($question_answer_item)): ?>
         <? $question_answer_item_d = mysqli_fetch_assoc($question_answer_item); ?>
         <div class="question_cn">
            <span>Сіздің жауабыңыз:</span>
            <p> - <?=($question_answer_item_d['answer']==1?'ИЯ':'ЖОҚ')?></p>
         </div>
      <? else: ?>
         <div class="form_im" data-sel="0" data-question-id="<?=$question_item_id?>" data-lesson-id="<?=$lesson_id?>" data-open-lesson-id="<?=$sql['txt']?>">
            <div class="form_radio question_56" data-val="1">ИЯ</div>
            <div class="form_radio question_56" data-val="2">ЖОҚ</div>
         </div>
      <? endif ?>

   </div>
</div>
