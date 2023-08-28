<div class="formSearch">
    <div class="inner">
        <div class="formSearchBox">
            <form role="search" id="searchform" method="GET" action="<?php echo esc_url( home_url('/doctor-list') ); ?> ">
                <div class="formContent">
                    <div class="formField">
                        <p class="formLabel">専門分野</p>
                        <div class="formInput">
                            <select name="tax" id="tax" class="formInputSelect">
                                <option value="">選択してください</option>
                                <?php
                                $taxonomy = 'specialized-field';
                                $terms = get_terms(array(
                                    'taxonomy' => $taxonomy,
                                    'hide_empty' => false,
                                ));
                                foreach ($terms as $term) {
                                    echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="formField">
                        <p class="formLabel">対応可能な疾患</p>
                        <div class="formInput">
                            <input type="text" id="key" name="key" value="<?php get_search_query(); ?>" class="formInputText" placeholder="疾患名を入力してください">
                        </div>
                    </div>
                    <div class="formField">
                        <input type="submit" class="formInputSubmit hover" value="この条件で検索する">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

