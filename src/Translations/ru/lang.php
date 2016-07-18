<?php

return [

 /*
  *  Constants
  */

  'nav-active-tickets'               => 'Открытые сообщения',
  'nav-completed-tickets'            => 'Закрытые сообщения',

  // Tables
  'table-id'                         => '#',
  'table-subject'                    => 'Тема',
  'table-owner'                      => 'Инициатор',
  'table-status'                     => 'Статус',
  'table-last-updated'               => 'Последнее обновление',
  'table-priority'                   => 'Приоритет',
  'table-agent'                      => 'Отвественный',
  'table-category'                   => 'Категория',

  // Datatables
  'table-decimal'                    => '',
  'table-empty'                      => 'Нет данных',
  'table-info'                       => 'Показано _START_ по _END_ из _TOTAL_ записей',
  'table-info-empty'                 => 'Показано 0 по 0 из 0 записей',
  'table-info-filtered'              => '(отфильтровано от _MAX_ всех записей)',
  'table-info-postfix'               => '',
  'table-thousands'                  => ',',
  'table-length-menu'                => 'Показывать _MENU_ записей',
  'table-loading-results'            => 'Загрузка...',
  'table-processing'                 => 'Ожидайте...',
  'table-search'                     => 'Поиск:',
  'table-zero-records'               => 'Не найдено',
  'table-paginate-first'             => 'Первая',
  'table-paginate-last'              => 'Последняя',
  'table-paginate-next'              => 'Следующая',
  'table-paginate-prev'              => 'Предыдущая',
  'table-aria-sort-asc'              => ': нажмите для сортировки по возрастания',
  'table-aria-sort-desc'             => ': нажмите для сортировки по убыванию',

  'btn-back'                         => 'Назад',
  'btn-cancel'                       => 'Выйти', // NEW
  'btn-close'                        => 'Закрыть',
  'btn-delete'                       => 'Удалить',
  'btn-edit'                         => 'Изменить',
  'btn-mark-complete'                => 'Завершить переписку',
  'btn-submit'                       => 'Отправить',

  'agent'                            => 'Отвественный',
  'category'                         => 'Категория',
  'colon'                            => ': ',
  'comments'                         => 'Комментарии',
  'created'                          => 'Создано',
  'description'                      => 'Описание',
  'flash-x'                          => '×', // &times;
  'last-update'                      => 'Последнее обновление',
  'no-replies'                       => 'Без ответа.',
  'owner'                            => 'Инициатор',
  'priority'                         => 'Приоритет',
  'reopen-ticket'                    => 'Переоткрыть сообщение',
  'reply'                            => 'Ответить',
  'responsible'                      => 'Ответственный',
  'status'                           => 'Статус',
  'subject'                          => 'Тема',
   'complete-body'                 =>  'Закрыт',
 /*
  *  Page specific
  */

// ____
  'index-title'                      => 'Система сообщений',

// tickets/____
  'index-my-tickets'                 => 'Мои сообщения',
  'btn-create-new-ticket'            => 'Создать новое',
  'index-complete-none'              => 'Нет закрытых сообщений',
  'index-active-check'               => 'Проверьте открытые сообщения, если Вы не можете найти ваше сообщение',
  'index-active-none'                => 'Нет отрытых сообщений',
  'index-create-new-ticket'          => 'Создать новое',
  'index-complete-check'             => 'Проверьте закрытые сообщения, если Вы не можете найти ваше сообщение',

  'create-ticket-title'              => 'Форма нового сообщения',
  'create-new-ticket'                => 'Создать новое',
  'create-ticket-brief-issue'        => 'Краткое сообщение',
  'create-ticket-describe-issue'     => 'Опишите Вашу проблему в деталях',

  'show-ticket-title'                => 'Сообщение',
  'show-ticket-js-delete'            => 'Вы действительно хотите удалить: ',
  'show-ticket-modal-delete-title'   => 'Удалить сообщение',
  'show-ticket-modal-delete-message' => 'Вы действительно хотите удалить сообщение: :subject?',

 /*
  *  Controllers
  */

// AgentsController
  'agents-are-added-to-agents'                      => 'Отвественный :names добавлен в список отвественных',
  'administrators-are-added-to-administrators'      => 'Администратор :names добавлен в список администраторов', //New
  'agents-joined-categories-ok'                     => 'Добавление в категорию выполнено',
  'agents-is-removed-from-team'                     => 'Removed agent\s :name from the agent team',
  'administrators-is-removed-from-team'             => 'Removed administrator\s :name from the administrators team', // New

// CategoriesController
  'category-name-has-been-created'   => 'Категория :name создана!',
  'category-name-has-been-modified'  => 'Категория :name изменена!',
  'category-name-has-been-deleted'   => 'Категория :name удалена!',

// PrioritiesController
  'priority-name-has-been-created'   => 'Приорирет :name создан!',
  'priority-name-has-been-modified'  => 'Приорирет :name изменен!',
  'priority-name-has-been-deleted'   => 'Приорирет :name удален!',
  'priority-all-tickets-here'        => 'Все приоритеты здесь',

// StatusesController
  'status-name-has-been-created'   => 'Статус :name создан!',
  'status-name-has-been-modified'  => 'Статус :name изменен!',
  'status-name-has-been-deleted'   => 'Статус :name удален!',
  'status-all-tickets-here'        => 'Все статусы здесь',

// CommentsController
  'comment-has-been-added-ok'        => 'Комментарий был успешно добавлен',

// NotificationsController
  'notify-new-comment-from'          => 'Новый комментарий для ',
  'notify-on'                        => ' включен ',
  'notify-status-to-complete'        => ' статус Выполнено',
  'notify-status-to'                 => ' статус ',
  'notify-transferred'               => ' перемещен ',
  'notify-to-you'                    => ' к',
  'notify-created-ticket'            => ' создано сообщение ',
  'notify-updated'                   => ' обновлено ',

 // TicketsController
  'the-ticket-has-been-created'      => 'Сообщение было создано!',
  'the-ticket-has-been-modified'     => 'Сообщение было изменено!',
  'the-ticket-has-been-deleted'      => 'Сообщение :name было удалено!',
  'the-ticket-has-been-completed'    => 'Сообщение :name было закрыто!',
  'the-ticket-has-been-reopened'     => 'Сообщение :name было переоткрыто!',
  'you-are-not-permitted-to-do-this' => 'У вас нет прав для совершения этой операции!',

 /*
 *  Middlewares
 */

 //  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
  'you-are-not-permitted-to-access'     => 'У вас нет доступа к этой странице!',

];
