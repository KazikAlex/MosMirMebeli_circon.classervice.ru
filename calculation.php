<section class="calculation">
    <div class="container">
        <div class="section_title">
            <div class="section_title_line"></div>
            <div class="section_title_text">Рассчитайте стоимость вашей кухни</div>
            <div class="section_title_line"></div>
        </div>
        <div class="calculation_wrapper">
            <div class="calculation_left">
                <button class="calculation_btn">Скачать купон на скидку</button>
            </div>
            <form class="calculation_right">
                <div class="calculation_right_title">Рассчет стоимости кухни по индивидуальным параметрам</div>
                <for class="calculation_right_choice-material">
                    <div class="calculation_right_choice-material_title">1. Выберите материал:</div>
                    <div class="calculation_right_choice-material_form">
                        <label><input name="choice-material" type="radio" value="mdf">&nbsp&nbspМДФ пленка</label>
                        <label><input name="choice-material" type="radio" value="plastic">&nbsp&nbspПластик</label>
                        <label><input name="choice-material" type="radio" value="paint">&nbsp&nbspЭмаль крашеные фасады</label>
                        <label><input name="choice-material" type="radio" value="array">&nbsp&nbspМассив дуба</label>
                    </div>
                </for>
                <div class="calculation_right_choice-plan">
                    <div class="calculation_right_choice-plan_title">1. Выберите планировку кухни:</div>
                    <div class="calculation_right_choice-plan_form">
                        <label><div class="calculation_right_choice-plan_img"><img src="<?php bloginfo( 'template_url' )?>/img/LineKithen.png" alt="прямая кухня"></div><input name="choice-plan" type="radio" value="linekitchen">&nbsp&nbspПрямая</label>
                        <label><div class="calculation_right_choice-plan_img"><img src="<?php bloginfo( 'template_url' )?>/img/RightKithen.png" alt="Г образная правая"></div><input name="choice-plan" type="radio" value="rightkitchen">&nbsp&nbspГ-образная правая</label>
                        <label><div class="calculation_right_choice-plan_img"><img src="<?php bloginfo( 'template_url' )?>/img/LeftKithen.png" alt="Г образная левая"></div><input name="choice-plan" type="radio" value="leftkitchen">&nbsp&nbspГ-образная левая</label>
                        <label><div class="calculation_right_choice-plan_img"><img src="<?php bloginfo( 'template_url' )?>/img/PKithen.png" alt="П образная"></div><input name="choice-plan" type="radio" value="pkitchen">&nbsp&nbspП-образная</label>
                    </div>
                </div>
                <div class="calculation_right_choice-size">
                    <div class="calculation_right_choice-size_title">3. Укажите размеры:</div>
                    <div class="calculation_right_choice-size_form">
                        <label>Длина А:<input name="sizeA" type="number" maxlength="4">см</label>
                        <label>Длина B:<input name="sizeB" type="number" maxlength="4">см</label>
                        <label>Длина C:<input name="sizeC" type="number" maxlength="4">см</label>
                        <label><input name="choice-size" type="radio" value="dontknow">&nbspНе знаю размеров</label>
                    </div>
                </div>
                <div class="calculation_right_submit">
                    <input class="calculation_right_submit_phone" name="clientphone" type="tel" maxlength="12" placeholder="+7(      ) _______ - ____ - ____">
                    <button class="calculation_right_submit_btn">Рассчитать стоимость</button>
                </div>
            </form>
        </div>
    </div>
</section>