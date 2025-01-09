## How to Use Laravel Reverse Migrator Application 

#### 1. Clone your project
```bash
git clone https://github.com/webreca/laravel-reverse-migrator.git
```
#### 2. Go to the folder application using cd command on your cmd or terminal
```bash
cd laravel-reverse-migrator
```
#### 3. Run composer install on your cmd or terminal
```bash
composer install
```
#### 4. Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu
```bash
copy .env.example .env
```
#### 5. Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
#### 6. Run php artisan key:generate
```bash
php artisan key:generate
```
#### 7. Run php artisan migrate
```bash
php artisan migrate
```
#### 8. Run php artisan serve
```bash
php artisan serve
```
To create migrations for all the tables, run:

```bash
php artisan migrate:generate
```

You can specify the tables you wish to generate using:

```bash
php artisan migrate:generate --tables="table1,table2,table3,table4,table5"
```

You can also ignore tables with:

```bash
php artisan migrate:generate --ignore="table3,table4,table5"
```

Laravel Migrations Generator will first generate all the tables, columns and indexes, and afterwards setup all the foreign key constraints.

So make sure you include all the tables listed in the foreign keys so that they are present when the foreign keys are created.

You can also specify the connection name if you are not using your default connection with:

```bash
php artisan migrate:generate --connection="connection_name"
```

### Squash Migrations

By default, Generator will generate multiple migration files for each table.

You can squash all migrations into a single file with:

```bash
php artisan migrate:generate --squash
```

### Options

Run `php artisan help migrate:generate` for a list of options.

| Options                              | Description                                                                                                                                                   |
|--------------------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------|
| -c, --connection[=CONNECTION]        | The database connection to use                                                                                                                                |
| -t, --tables[=TABLES]                | A list of tables or views you wish to generate migrations for separated by a comma: users,posts,comments                                                      |
| -i, --ignore[=IGNORE]                | A list of tables or views you wish to ignore, separated by a comma: users,posts,comments                                                                      |
| -p, --path[=PATH]                    | Where should the file be created?                                                                                                                             |
| -tp, --template-path[=TEMPLATE-PATH] | The location of the template for this generator                                                                                                               |
| --date[=DATE]                        | Migrations will be created with specified date. Views and foreign keys will be created with + 1 second. Date should be in format supported by `Carbon::parse` |
| --table-filename[=TABLE-FILENAME]    | Define table migration filename, default pattern: `[datetime]\_create_[name]_table.php`                                                                       |
| --view-filename[=VIEW-FILENAME]      | Define view migration filename, default pattern: `[datetime]\_create_[name]_view.php`                                                                         |
| --proc-filename[=PROC-FILENAME]      | Define stored procedure filename, default pattern: `[datetime]\_create_[name]_proc.php`                                                                       |
| --fk-filename[=FK-FILENAME]          | Define foreign key migration filename, default pattern: `[datetime]\_add_foreign_keys_to_[name]_table.php`                                                    |
| --log-with-batch[=LOG-WITH-BATCH]    | Log migrations with given batch number. We recommend using batch number 0 so that it becomes the first migration                                              |
| --default-index-names                | Don\'t use DB index names for migrations                                                                                                                      |
| --default-fk-names                   | Don\'t use DB foreign key names for migrations                                                                                                                |
| --use-db-collation                   | Generate migrations with existing DB collation                                                                                                                |
| --skip-log                           | Don\'t log into migrations table                                                                                                                              |
| --skip-vendor                        | Don\'t generate vendor migrations                                                                                                                             |
| --skip-views                         | Don\'t generate views                                                                                                                                         |
| --skip-proc                          | Don\'t generate stored procedures                                                                                                                             |
| --squash                             | Generate all migrations into a single file                                                                                                                    |
| --with-has-table                     | Check for the existence of a table using `hasTable`                                                                                                           |

## SQLite Alter Foreign Key

The generator first generates all tables and then adds foreign keys to existing tables.

However, SQLite only supports foreign keys upon creation of the table and not when tables are altered.
*_add_foreign_keys_* migrations will still be generated, however will get omitted if migrate to SQLite type database.

## User-Defined Type Columns

The generator will recognize user-defined type from the schema, and then generate migration as

```php
public function up()
{
    Schema::create('table', function (Blueprint $table) {
        ...
    });
    DB::statement("ALTER TABLE table ADD column custom_type NOT NULL");
}
```

Note that the new `column` is always added at the end of the created `table` which means the ordering of the column generated in migration will differ from what we have from the schema.

Supported database with user-defined types:

- [x] PostgreSQL
- [x] SQL Server

## Generate Seeder From Database

### [table_name]
Mandatory parameter which defines which table/s will be used for seed creation.
Use CSV notation for multiple tables. Seed file will be generated for each table.

Examples:
```
php artisan iseed my_table
```
```
php artisan iseed my_table,another_table

## Thank You

[WEBRECA TECHNOLOGIES](https://www.webreca.com/) <img src="https://github.com/TheDudeThatCode/TheDudeThatCode/blob/master/Assets/wave.gif" width="29px">
<br />
<br />
<img src="https://github.com/webreca/webreca/blob/main/webreca-banner.png" alt="drawing" style="width:100%;"/>
<img src="https://github.com/webreca/webreca/blob/main/technologies-used.png" alt="drawing" style="width:100%;"/>

## Webreca Technologies - New Delhi, India

Welcome to Webreca Technologies! We specialize in delivering top-notch, innovative web solutions to clients across the globe. Based in the heart of New Delhi, India, we are dedicated to providing cutting-edge technologies and creative digital solutions tailored to meet your unique business needs.

---

## About Us

We are a dynamic web development agency based in New Delhi, offering comprehensive services in web design, development, and digital marketing. With a team of highly skilled professionals, we are passionate about creating websites that not only look great but also deliver exceptional user experiences and functionality.

Our mission is to empower businesses of all sizes to establish a strong online presence, improve engagement, and achieve their digital goals through high-performance web solutions.

---

## Our Services

We offer a wide range of services to help your business grow in the digital landscape:

### 1. **Custom Web Development**

-   Build responsive, user-friendly websites tailored to your needs.
-   Expertise in HTML, CSS, JavaScript, React, Angular, Vue.js, and more.
-   CMS development (WordPress, Joomla, Drupal).

### 2. **E-commerce Solutions**

-   Development of secure and scalable online stores.
-   Integration with payment gateways (PayPal, Stripe, Razorpay, etc.).
-   Platforms: Shopify, WooCommerce, Magento, BigCommerce.

### 3. **Web Design & UI/UX**

-   Intuitive and visually appealing web designs.
-   User-centric designs that improve user engagement.
-   Wireframes, prototypes, and mockups using tools like Figma and Adobe XD.

### 4. **SEO & Digital Marketing**

-   Improve your website’s search engine ranking with our SEO services.
-   Social media management, PPC campaigns, email marketing.
-   Brand strategy and online reputation management.

### 5. **Mobile App Development**

-   Cross-platform mobile apps for Android and iOS.
-   Native apps, progressive web apps (PWAs), and hybrid solutions.

### 6. **Web Maintenance & Support**

-   Regular updates, backups, and security patches.
-   Ongoing support and troubleshooting.
-   Performance optimization for speed and scalability.

---

## Why Choose Us?

-   **Experienced Team**: Our team consists of experienced developers, designers, and marketers who are passionate about bringing your ideas to life.
-   **Tailored Solutions**: We believe that every business is unique. We provide customized solutions that align with your business goals and target audience.

-   **Cutting-edge Technology**: We stay ahead of the curve by adopting the latest technologies and industry best practices to ensure your project is built for the future.

-   **Client-Centric Approach**: We value communication and transparency throughout the development process. Your satisfaction is our priority.

-   **Competitive Pricing**: We offer high-quality solutions at competitive prices, making us the perfect choice for businesses of all sizes.

-   **Timely Delivery**: We understand the importance of deadlines and ensure that projects are completed on time, without compromising quality.

---

## Our Process

1. **Discovery & Planning**: Understanding your requirements, goals, and target audience.
2. **Design & Prototyping**: Creating wireframes, mockups, and prototypes to define the visual direction.
3. **Development**: Building the website or application with the latest technologies.
4. **Quality Assurance**: Testing across devices and browsers to ensure functionality and performance.
5. **Launch & Maintenance**: Deploying the project and providing ongoing support and updates.

---

## Technologies We Use

We work with a variety of technologies to create high-performance websites and applications:

-   **Frontend**: HTML5, CSS3, JavaScript, React, Angular, Vue.js
-   **Backend**: Node.js, Python (Django, Flask), PHP, Ruby on Rails
-   **Databases**: MySQL, MongoDB, PostgreSQL
-   **CMS**: WordPress, Joomla, Drupal
-   **E-commerce**: Shopify, WooCommerce, Magento, OpenCart
-   **Mobile Apps**: React Native, Flutter, Swift, Kotlin

## <a href="https://aws.amazon.com" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/amazonwebservices/amazonwebservices-original-wordmark.svg" alt="aws" width="40" height="40"/> </a> <a href="https://www.gnu.org/software/bash/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/gnu_bash/gnu_bash-icon.svg" alt="bash" width="40" height="40"/> </a> <a href="https://getbootstrap.com" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/bootstrap/bootstrap-plain-wordmark.svg" alt="bootstrap" width="40" height="40"/> </a> <a href="https://www.w3schools.com/css/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/> </a> <a href="https://www.docker.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/docker/docker-original-wordmark.svg" alt="docker" width="40" height="40"/> </a> <a href="https://expressjs.com" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/express/express-original-wordmark.svg" alt="express" width="40" height="40"/> </a> <a href="https://git-scm.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/git-scm/git-scm-icon.svg" alt="git" width="40" height="40"/> </a> <a href="https://hadoop.apache.org/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/apache_hadoop/apache_hadoop-icon.svg" alt="hadoop" width="40" height="40"/> </a> <a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a> <a href="https://www.java.com" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/java/java-original.svg" alt="java" width="40" height="40"/> </a> <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/> </a> <a href="https://www.jenkins.io" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/jenkins/jenkins-icon.svg" alt="jenkins" width="40" height="40"/> </a> <a href="https://kafka.apache.org/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/apache_kafka/apache_kafka-icon.svg" alt="kafka" width="40" height="40"/> </a> <a href="https://kubernetes.io" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/kubernetes/kubernetes-icon.svg" alt="kubernetes" width="40" height="40"/> </a> <a href="https://www.linux.org/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/linux/linux-original.svg" alt="linux" width="40" height="40"/> </a> <a href="https://www.mathworks.com/" target="_blank" rel="noreferrer"> <img src="https://upload.wikimedia.org/wikipedia/commons/2/21/Matlab_Logo.png" alt="matlab" width="40" height="40"/> </a> <a href="https://www.mongodb.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mongodb/mongodb-original-wordmark.svg" alt="mongodb" width="40" height="40"/> </a> <a href="https://www.mysql.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="mysql" width="40" height="40"/> </a> <a href="https://nodejs.org" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/nodejs/nodejs-original-wordmark.svg" alt="nodejs" width="40" height="40"/> </a> <a href="https://postman.com" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/getpostman/getpostman-icon.svg" alt="postman" width="40" height="40"/> </a> <a href="https://www.python.org" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/python/python-original.svg" alt="python" width="40" height="40"/> </a> <a href="https://reactjs.org/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/react/react-original-wordmark.svg" alt="react" width="40" height="40"/> </a> <a href="https://tailwindcss.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg" alt="tailwind" width="40" height="40"/> </a> <a href="https://www.typescriptlang.org/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/typescript/typescript-original.svg" alt="typescript" width="40" height="40"/> </a>

## Our Clients

We have worked with businesses of all sizes, from startups to large enterprises. Our diverse portfolio spans various industries, including e-commerce, healthcare, education, finance, and more.

---

## Get in Touch

Are you ready to build your digital presence? Let’s talk!

-   📧 **Email**: [webreca@gmail.com](mailto:webreca@gmail.com)
-   ☎️ **Phone**: +91-9999577620
-   📍 **Office Address**: M-4, New Police Line, Kingsway Camp, New Delhi, India 110009

Follow us on social media for the latest updates:

-   [Facebook](https://www.facebook.com/profile.php?id=100089151942138)
-   [Github](https://github.com/webreca)
-   [LinkedIn](https://www.linkedin.com/in/webreca-technologies-496519339/)
-   [Instagram](https://www.instagram.com/webreca21292/)
-   [Stack Overflow](https://stackoverflow.com/users/17358298/webreca-technologies)

---

## Careers

We’re always looking for talented developers, designers, and marketers to join our growing team. If you're passionate about web development and want to work in a collaborative, innovative environment, [check out our careers page](#) for open positions.

---

## License

This project is licensed under the [MIT License](#).

---

## Acknowledgments

We’d like to acknowledge our talented team, our loyal clients, and the technologies that empower us to deliver excellent digital experiences.

<img src="https://github.com/webreca/webreca/blob/main/linked-in-banner.png" alt="drawing" style="width:100%;"/><br />
<br />

---

Thank you for considering us for your next project! We look forward to partnering with you.
<br />
<br />

<a href="https://www.facebook.com/profile.php?id=100089151942138">
  <img align="left" width="26px" src="https://cdn.jsdelivr.net/npm/simple-icons@v3/icons/facebook.svg" />
</a>
<a href="https://www.linkedin.com/in/webreca-technologies-496519339/">
  <img align="left" width="24px" src="https://cdn.jsdelivr.net/npm/simple-icons@v3/icons/linkedin.svg"  />
</a>
<a href="https://github.com/webreca">
  <img align="left" width="26px" src="https://cdn.jsdelivr.net/npm/simple-icons@v3/icons/github.svg" />
</a>
<a href="https://stackoverflow.com/users/17358298/webreca-technologies">
  <img align="left" width="26px" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/stackoverflow.svg" />
</a>
<a href="mailto:webreca@gmail.com">
  <img align="left" width="26px" src="https://cdn.jsdelivr.net/npm/simple-icons@v3/icons/gmail.svg" />
</a>
<a href="https://www.instagram.com/webreca21292/">
  <img align="left" width="26px" src="https://cdn.jsdelivr.net/npm/simple-icons@v3/icons/instagram.svg" />
</a>
<a href="https://join.skype.com/invite/tXt50G44g7ZO">
  <img align="left" width="26px" src="https://cdn.jsdelivr.net/npm/simple-icons@v3/icons/skype.svg" />
</a>
