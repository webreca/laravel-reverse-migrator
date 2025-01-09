<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        $this->call(AdminsTableSeeder::class);
        $this->call(AdminNotificationsTableSeeder::class);
        $this->call(AdminPasswordResetsTableSeeder::class);
        $this->call(AdminReviewsTableSeeder::class);
        $this->call(AmenitiesTableSeeder::class);
        $this->call(BookingsTableSeeder::class);
        $this->call(BookingGuestsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CommissionLogsTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(DepositsTableSeeder::class);
        $this->call(ExtensionsTableSeeder::class);
        $this->call(FormsTableSeeder::class);
        $this->call(FrontendsTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);
        $this->call(GatewaysTableSeeder::class);
        $this->call(GatewayCurrenciesTableSeeder::class);
        $this->call(GeneralSettingsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(NotificationLogsTableSeeder::class);
        $this->call(NotificationTemplatesTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(PropertiesTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(SubscribersTableSeeder::class);
        $this->call(SupportAttachmentsTableSeeder::class);
        $this->call(SupportMessagesTableSeeder::class);
        $this->call(SupportTicketsTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserLoginsTableSeeder::class);
        $this->call(WithdrawalsTableSeeder::class);
        $this->call(WithdrawMethodsTableSeeder::class);
    }
}
