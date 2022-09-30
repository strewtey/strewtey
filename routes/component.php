<?php

Route::get('/component/{name}', [\Strew\Component\Generate\Controllers\ComponentController::class, 'web']);
/*
{"buttons":[{"title":"Chat","icon":"http:\/\/www.cdn.net\/icon\/svg\/icons8_chat_bubble.svg","color":"futura-color-dark-20 dark:futura-color-light-20"},{"title":"News","icon":"http:\/\/www.cdn.net\/icon\/svg\/icons8_dashboard_layout.svg","click":"'ll'"},{"title":"Plus","icon":"http:\/\/www.cdn.net\/icon\/svg\/icons8_plus_math.svg","attribute":"style=\"transform:translateY(-20px);\"","color":"text-green-500- color-white- rounded-full p-3 futura-bg-color-light-35 dark:futura-bg-color-dark-40 dark:futura-bg-color-opacity-50","dimension":"w-12 h-12"},{"title":"Notification","icon":"http:\/\/www.cdn.net\/icon\/svg\/icons8_notification_center.svg"},{"title":"Profile","icon":"http:\/\/www.cdn.net\/icon\/svg\/icons8_customer.svg"}]}
*/