<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class VerifyUserEmail extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'user:verify {email : The email address of the user to verify}';

    /**
     * The console command description.
     */
    protected $description = 'Manually verify a user\'s email address';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $email = $this->argument('email');
        
        $user = User::where('email', $email)->first();
        
        if (!$user) {
            $this->error("User with email '{$email}' not found.");
            return 1;
        }
        
        if ($user->hasVerifiedEmail()) {
            $this->info("User '{$email}' is already verified.");
            return 0;
        }
        
        $user->markEmailAsVerified();
        
        $this->info("✓ Email verified successfully for '{$email}'!");
        
        return 0;
    }
}
