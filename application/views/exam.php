<div class="message">
    <div class="row">
        <div class="col-md-12">
            <p>Choose the correct answer</p>
        </div>
    </div>
</div>


<main>
    <div class="container exam">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">


                <?php echo form_open('home/result'); ?>

                <?php
                
                $i = 0;
                foreach ($mcq as $item):
                    $i += 1;
                  
                    ?>
                    <?php echo form_hidden('question' . $i, $item['question_id']); ?>
                    <h5><?php echo $i . ') ' . $item['question']; ?></h5>

                    <div class="radio">
                        <label>
                            <input name="answer<?php echo $i; ?>" type="radio"
                                   value="<?php echo $item['one']; ?>">
                            <?php echo $item['one']; ?>
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input name="answer<?php echo $i; ?>" type="radio"
                                   value="<?php echo $item['two']; ?>">
                            <?php echo $item['two']; ?>
                        </label>
                    </div>
                       <div class="radio">
                        <label>
                            <input name="answer<?php echo $i; ?>" type="radio"
                                   value="<?php echo $item['three']; ?>">
                            <?php echo $item['three']; ?>
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input name="answer<?php echo $i; ?>" type="radio"
                                   value="<?php echo $item['four']; ?>">
                            <?php echo $item['four']; ?>
                        </label>
                    </div>
              <input type="hidden" value="<?php echo $item['question_id']; ?>" name="all_ques[]">
                <input type="hidden" value="<?php echo $item['answer']; ?>" name="all_ans[]">
                    <br>
                <?php endforeach; ?>
                  <input type="hidden" name="user_id" value="<?php echo $_GET['']; ?>">
                <br>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</main>




