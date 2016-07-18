<?php

return [

 /*
  *  Constants
  */
  'nav-settings'                  => 'Настройки',
  'nav-agents'                    => 'Ответственные',
  'nav-dashboard'                 => 'Панель управления',
  'nav-categories'                => 'Категории',
  'nav-priorities'                => 'Приоритеты',
  'nav-statuses'                  => 'Статусы',
  'nav-configuration'             => 'Конфигурация',
  'nav-administrator'             => 'Администратор',  //new

  'table-hash'                    => '#',
  'table-id'                      => 'ID',
  'table-name'                    => 'Название',
  'table-action'                  => 'Событие',
  'table-categories'              => 'Категория',
  'table-join-category'           => 'Добавить в категорию',
  'table-remove-agent'            => 'Удлаить из ответственных',
  'table-remove-administrator'    => 'Удалить из администраторов', // New

  'table-slug'                    => 'Алиас',
  'table-default'                 => 'Значение по умолчанию',
  'table-value'                   => 'Текущее значение',
  'table-lang'                    => 'Язык',
  'table-edit'                    => 'Изменить',

  'btn-back'                      => 'Назад',
  'btn-delete'                    => 'Удалить',
  'btn-edit'                      => 'Изменить',
  'btn-join'                      => 'Добавить',
  'btn-remove'                    => 'Удалить',
  'btn-submit'                    => 'Отправить',
  'btn-save'                      => 'Сохранить',
  'btn-update'                    => 'Обновить',

  'colon'                         => ': ',

 /*
  *  Page specific
  */

// tickets-admin/____
  'index-title'                         => 'Панель управления системы сообщений',
  'index-empty-records'                 => 'Нет сообщений',
  'index-total-tickets'                 => 'Всего сообщений',
  'index-open-tickets'                  => 'Открытые сообщения',
  'index-closed-tickets'                => 'Закрытые сообщения',
  'index-performance-indicator'         => 'Показатель производительности',
  'index-periods'                       => 'Период',
  'index-3-months'                      => '3 месяца',
  'index-6-months'                      => '6 месяцев',
  'index-12-months'                     => '12 месяецв',
  'index-tickets-share-per-category'    => 'Сообщений по категориям',
  'index-tickets-share-per-agent'       => 'Сообщений по ответственным',
  'index-categories'                    => 'Категорий',
  'index-category'                      => 'Категория',
  'index-agents'                        => 'Ответственных',
  'index-agent'                         => 'Отвественный',
  'index-administrators'                => 'Админитстраторов',  //new
  'index-administrator'                 => 'Администратор',  //new
  'index-users'                         => 'Пользователей',
  'index-user'                          => 'Пользователь',
  'index-tickets'                       => 'Сообщений',
  'index-open'                          => 'Открытых',
  'index-closed'                        => 'Закрытых',
  'index-total'                         => 'Всего',
  'index-month'                         => 'Месяц',
  'index-performance-chart'             => 'Сколько дней в среднем, чтобы ответить на сообщение?',
  'index-categories-chart'              => 'Распределение сообщений по категориям',
  'index-agents-chart'                  => 'Распределение сообщений по ответственным',

// tickets-admin/agent/____
  'agent-index-title'             => 'Управление ответственными',
  'btn-create-new-agent'          => 'Создать нового ответственного',
  'agent-index-no-agents'         => 'Нет ответственных, ',
  'agent-index-create-new'        => 'Добавить ответственного',
  'agent-create-title'            => 'Добавление ответственного',
  'agent-create-add-agents'       => 'Добавление ответственных',
  'agent-create-no-users'         => 'Нет аккаунтов пользователей, создайте для начала пользователя.',
  'agent-create-select-user'      => 'Выберите пользователя в качестве ответственного',

// tickets-admin/administrators/____
  'administrator-index-title'                   => 'Управление адимнистраторами',  //new
  'btn-create-new-administrator'                => 'Добавить нового администратора',  //new
  'administrator-index-no-administrators'       => 'Нет администраторов, ',  //new
  'administrator-index-create-new'              => 'Добавить',  //new
  'administrator-create-title'                  => 'Добавление администратора',  //new
  'administrator-create-add-administrators'     => 'Добавление администраторов',  //new
  'administrator-create-no-users'               => 'Нет аккаунтов пользователей, создайте для начала пользователя.',  //new
  'administrator-create-select-user'            => 'Выберите пользователя в качестве администратора',  //new

// tickets-admin/category/____
  'category-index-title'          => 'Управление категориями',
  'btn-create-new-category'       => 'Создать новую',
  'category-index-no-categories'  => 'Нет категорий, ',
  'category-index-create-new'     => 'создать новую',
  'category-index-js-delete'      => 'Уверены, что хотите удалить категорию: ',
  'category-create-title'         => 'Создание новой категории',
  'category-create-name'          => 'Название',
  'category-create-color'         => 'Цвет',
  'category-edit-title'           => 'Изменить категорию: :name',

// tickets-admin/priority/____
  'priority-index-title'          => 'Управление приоритетами',
  'btn-create-new-priority'       => 'Создать новый приоритет',
  'priority-index-no-priorities'  => 'Нет приоритетов, ',
  'priority-index-create-new'     => 'создать новый приоритет',
  'priority-index-js-delete'      => 'Уверены, что хотите удалить приоритет: ',
  'priority-create-title'         => 'Добавление нового приоритета',
  'priority-create-name'          => 'Название',
  'priority-create-color'         => 'Цвет',
  'priority-edit-title'           => 'Изенить приоритет: :name',

// tickets-admin/status/____
  'status-index-title'            => 'Управление статусами',
  'btn-create-new-status'         => 'Добавить новый статус',
  'status-index-no-statuses'      => 'Нет статусов,',
  'status-index-create-new'       => 'добавить новый статус',
  'status-index-js-delete'        => 'Уверены, что хотите удалить статус: ',
  'status-create-title'           => 'Добавление нового статуса',
  'status-create-name'            => 'Название',
  'status-create-color'           => 'Цвет',
  'status-edit-title'             => 'Изменить статус: :name',

// tickets-admin/configuration/____
  'config-index-title'            => 'Изменение параметров',
  'config-index-subtitle'         => 'Параметры',
  'btn-create-new-config'         => 'Добавить новый параметр',
  'config-index-no-settings'      => 'Нет параметров,',
  'config-index-initial'          => 'Инициализация',
  'config-index-tickets'          => 'Сообщения',
  'config-index-notifications'    => 'Уведомления',
  'config-index-permissions'      => 'Разрешения',
  'config-index-editor'           => 'Редактор', //Added: 2016.01.14
  'config-index-other'            => 'Другие',
  'config-create-title'           => 'Создать: новый глобальный параметр',
  'config-create-subtitle'        => 'Добавление параметра',
  'config-edit-title'             => 'Редактировать: глобальный параметр',
  'config-edit-subtitle'          => 'Редактировать параметр',
  'config-edit-id'                => 'ID',
  'config-edit-slug'              => 'Алиас',
  'config-edit-default'           => 'Значение по умолчанию',
  'config-edit-value'             => 'Текущее значение',
  'config-edit-language'          => 'Язык',
  'config-edit-unserialize'       => 'Получить массив значений и изменить их',
  'config-edit-serialize'         => 'Получить сериализованную строку измененных значений (необходимо ввести в поле)',
  'config-edit-should-serialize'  => 'Сериализация', //Added: 2016-01-16
  'config-edit-eval-warning'      => 'When checked, the server will run eval()!
  									  Don\'t use this if eval() is disabled on your server or if you don\'t exactly know what you are doing!
  									  Exact code executed:', //Added: 2016-01-16
  'config-edit-reenter-password'  => 'Повторите Ваш пароль', //Added: 2016-01-16
  'config-edit-auth-failed'       => 'Пароль некорректный', //Added: 2016-01-16
  'config-edit-eval-error'        => 'Неизвестное значение', //Added: 2016-01-16
  'config-edit-tools'             => 'Инструменты:',

];
