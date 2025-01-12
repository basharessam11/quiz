# مزايا لوحة التحكم


- ✅ مهيئة للسيو بشكل تلقائي وذكي
- ✅ جاهزة لعرض اشعارات مع صور
- ✅ عرض التنبيهات بشكل لطيف
- ✅ عرض الأخطاء بشكل لحظي وتلقائي
- ✅ طريقة لعرض الصور باحترافية
- ✅ تدعم السحب والافلات
- ✅ الاشعارات في الوقت الفعلي
- ✅ أيقونات مدفوعة بشكل مجاني
- ✅ أفضل وأجمل الخطوط العربية
- ✅ اعدادات Robots جاهزة
- ✅ منشئ SiteMap تلقائي
- ✅ جاهزة للتحويل إلى تطبيق هاتف
- ✅ جميع الصفحات الأساسية وأكثر
- ✅ احصائيات رائعة في لوحة التحكم
- ✅ امكانية انشاء قوائم وتحديد أماكنها
- ✅ امكانية ترتيب الروابط داخل القوائم
- ✅ امكانية انشاء صفحات مخصصة
- ✅ نظام اعلانات جاهز
- ✅ مدونة متكاملة أقسام،مقالات ..
- ✅ نظام تحويل الروابط
- ✅ عربية بالكامل !
- ✅ محرر جميل مع امكانية رفع صور
- ✅ نظام مستخدمين ولهم صور
- ✅ متجاوبة بالكامل
- ✅ تستخدم آخر اصدار Laravel
- ✅ تستخدم آخر اصدار Bootstrap
- ✅ الاشعارات في الوقت الفعلي
- ✅ راصد الأخطاء الذكي
- ✅ نظام تتبع شامل
- ✅ اضافة حدود الزيارات لزيادة الحماية
- ✅ صفحات 404 مخصصة
- ✅ صفحات الدخول والتسجيل وغيرها
- ✅ نظام اعدادات الموقع
- ✅ جاهزة للدمج مع كلاود فلاير
- ✅ نظام متابعة ذكي
- ✅ نظام صلاحيات متقدم
- ✅ مرفق نماذج لصناعة الصفحات
- ✅ نظام التذاكر للتواصل معنا
- ✅ نظام Plugins جاهز لاضافة المزيد
- ✅ المزيد 


### Screenshots


![screenshots/1.jpg](https://raw.githubusercontent.com/basharessam11/quiz/refs/heads/main/img/screenshots/1.png)
![screenshots/2.jpg](https://raw.githubusercontent.com/basharessam11/quiz/refs/heads/main/img/screenshots/2.png)
![screenshots/3.jpg](https://raw.githubusercontent.com/basharessam11/quiz/refs/heads/main/img/screenshots/3.png)
![screenshots/4.jpg](https://raw.githubusercontent.com/basharessam11/quiz/refs/heads/main/img/screenshots/4.png)
![screenshots/5.jpg](https://raw.githubusercontent.com/basharessam11/quiz/refs/heads/main/img/screenshots/5.png)




<!-- - ✅ Auto & Smart Seo
- ✅ Optimized Notifications With Images
- ✅ Smart Alerts
- ✅ Auto Js Validations
- ✅ Front End Alert
- ✅ Nice Image Viewing FancyBox
- ✅ Drag And drop Feature
- ✅ Fully Arabic 😀
- ✅ Smart Editor With Upload Images
- ✅ Select from Already uploaded Files
- ✅ Fully Profile System With Avatars ( Can Resize Avatar )
- ✅ Fully Responsive
- ✅ Intervally Getting Notifcations Out Of The Box
- ✅ FontAwesome PRO 💥 + ResponsiveFonts + Noto Sans Arabic fonts Included
- ✅ Robots.txt , SiteMapGenerator , manifest.json
- ✅ General Statistics On Home Page ( Traffic , New Users , Top Pages , Top Browsers , Top Devices , Top OSs , Top Ips , Top Users , and so on ... )
- ✅ basic pages ( contact , articles , privacy , terms , about , categories , redirections )
- ✅ You can Create Menus With Links ( can change order by Drag And drop )
- ✅ Ability to Create custom pages
- ✅ Smart Error Listeners
- ✅ Smart Traffic tracker
- ✅ RateLimit Plugin
- ✅ Custom 404 Page
- ✅ Nice Login , Register and Confirm Email Pages
- ✅ Most Common Settings
- ✅ Ready to integrate CloudFlare Firewall
- ✅ Smart Logging System -->
    
 

### How to setup

```bash
#dont forget to install 
sudo apt-get install php-imagick
composer install
# copy .env.example to .env
cp .env.example .env
# generate security key , link storage file
php artisan key:generate
php artisan storage:link
# after connect your database via .env file
php artisan migrate:fresh
php artisan db:seed

# dont forget to start queuing and run schedule on the background 
php artisan queue:work && php artisan schedule:run 
```

### Credentials

```
login page : <http://127.0.0.1:8000/login>
email : admin@admin.com
password : password

```

### Main Yield Sections

```jsx
@yield('styles')
@yield('content')
@yield('after-body')
@yield('scripts')
```

### Notifications On Response

```jsx
// docs : https://github.com/mckenziearts/laravel-notify

notify()->info('content','title');

notify()->success('content','title');

notify()->error('content','title');
```

### Notifications On Frontend

```jsx
// docs : https://github.com/CodeSeven/toastr
*****
You have To put alert in scripts section
// @yield('scripts')
*****
// Display a warning toast, with no title
toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!')

// Display a success toast, with a title
toastr.success('Have fun storming the castle!', 'Miracle Max Says')

// Display an error toast, with a title
toastr.error('I do not think that word means what you think it means.', 'Inconceivable!')

// Immediately remove current toasts without using animation
toastr.remove()

// Remove current toasts using animation
toastr.clear()

// Override global options
toastr.success('We do have the Kapua suite available.', 'Turtle Bay Resort', {timeOut: 5000})
```

### Notification to [ 'dashboard' , 'email' ]

```jsx
(new \MainHelper)->notify_user([
      'user_id'=>2,
      'message'=>"محتوى الإشعار" ,
      'url'=>"http://example.com",
			'methods'=>['database','mail']
]);
```

### Editor with and without file-explorer

```jsx
<textarea type="text" name="description" required minlength="3" maxlength="10000" class="form-control editor with-file-explorer" ></textarea>
<textarea type="text" name="description" required minlength="3" maxlength="10000" class="form-control editor"  ></textarea>
```

### Fancybox

```jsx
/* Just Add this Tag To image */
<img src="" data-fancybox />

/* Every image inside this class "data-fancybox" will be converted to fancy */
<div class="fancybox">
		<img src="" />
</div>
```

### License
The Laravel framework is open-sourced software licensed under the MIT license.
