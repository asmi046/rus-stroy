<div class="filter-section">
   <form class="filter-form" action="{{ url()->current() }}" method="GET">
       <div class="filter-form__row">
           <div class="filter-form__group">
               <label for="material" class="filter-form__label">Материал</label>
               <select name="wall_material" id="material" class="filter-form__select">
                   <option value="%" {{ request('wall_material', '%') == '%' ? 'selected' : '' }}>Все материалы</option>
                   @foreach ($wall_materials as $material)
                       <option value="{{ $material }}" {{ request('wall_material') == $material ? 'selected' : '' }}>{{ $material }}</option>
                   @endforeach
               </select>
           </div>

           <div class="filter-form__group">
               <label for="floors" class="filter-form__label">Количество этажей</label>
               <select name="floors" id="floors" class="filter-form__select">
                   <option value="%">Любое количество</option>
                   @foreach ($floors as $value => $label)
                       <option value="{{ $value }}" {{ request('floors') == $value ? 'selected' : '' }}>{{ $label }}</option>
                   @endforeach
               </select>
           </div>

           <div class="filter-form__group">
               <label class="filter-form__label">Площадь, м²</label>
               <div class="filter-form__range">
                   <input type="number" name="area_from" placeholder="от" class="filter-form__input" min="0">
                   <span class="filter-form__separator">—</span>
                   <input type="number" name="area_to" placeholder="до" class="filter-form__input" min="0">
               </div>
           </div>

           <div class="filter-form__group">
               <label for="extension" class="filter-form__label">Пристройка</label>
               <select name="extension" id="extension" class="filter-form__select">
                   <option value="">Не важно</option>
                   <option value="yes">Есть</option>
                   <option value="no">Нет</option>
               </select>
           </div>

           <div class="filter-form__group">
               <button type="submit" class="filter-form__submit button">Применить фильтр</button>
           </div>
       </div>
   </form>
</div>
