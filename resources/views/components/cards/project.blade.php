<a href="{{ route('projects_page', $item->slug)}}" class="project-card">
                <div class="project-card__image-wrapper">
                    <div class="control_icons">
                        <button class="control_icons__icon __like" aria-label="Избранное">
                                <svg class="sprite_icon">
                                    <use xlink:href="#like_icon"></use>
                                </svg>
                        </button>

                        <button class="control_icons__icon __compare" aria-label="Сравнение">
                            <svg class="sprite_icon">
                                <use xlink:href="#compare_icon"></use>
                            </svg>
                        </button>
                    </div>

                    <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}" class="project-card__image">
                    <div class="project-card__overlay">
                        <h3 class="project-card__name">{{ $item->title }}</h3>
                    </div>
                </div>

                <div class="project-card__info">
                    <div class="project-card__params">
                        <div class="project-card__param">
                            <span class="project-card__param-label">Тип:</span>
                            <span class="project-card__param-value">{{ $item->type }}</span>
                        </div>
                        <div class="project-card__param">
                            <span class="project-card__param-label">Этажность:</span>
                            <span class="project-card__param-value">{{ $item->floors }}</span>
                        </div>
                    </div>

                    <div class="project-card__details">
                        <div class="project-card__detail">
                            <span class="project-card__detail-value">Площадь:</span>
                            <span class="project-card__detail-label">{{ intval($item->total_area) }} м<sup>2</sup></span>
                        </div>
                        <div class="project-card__detail">
                            <span class="project-card__detail-value">Мансарда:</span>
                            <span class="project-card__detail-label">{{ $item->mansard?"Да":"Нет" }}</span>
                        </div>
                        <div class="project-card__detail">
                            <span class="project-card__detail-value">Материал стен:</span>
                            <span class="project-card__detail-label">{{ $item->wall_material ?? "По выбору" }}</span>
                        </div>
                    </div>
                </div>
            </a>
