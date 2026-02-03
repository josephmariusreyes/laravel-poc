<?php

namespace App\Services;

use App\Models\User;
use App\Services\Contracts\UserServiceInterface;

class UserService implements UserServiceInterface
{
    /**
     * Get user information by ID
     */
    public function getUserInfo(int $userId): ?User
    {
        // TODO: Implement getUserInfo method
        // Steps to implement:
        // 1. Validate userId parameter (ensure it's positive)
        // 2. Use User model to find user by ID
        // 3. Consider using find() vs findOrFail() based on requirements
        // 4. Decide what relationships to eager load (if any)
        // 5. Consider caching frequently accessed user data
        // 6. Handle soft deletes if implemented
        // 7. Return null if user not found, or User instance if found
        
        throw new \Exception('Method not implemented yet');
    }

    /**
     * Create a new user
     */
    public function createNewUser(array $userData): User
    {
        // TODO: Implement createNewUser method
        // Steps to implement:
        // 1. Validate required fields (name, email, password)
        // 2. Check if email already exists
        // 3. Hash password using Hash::make()
        // 4. Sanitize and prepare user data
        // 5. Create user using User::create()
        // 6. Handle database exceptions (unique constraint violations)
        // 7. Consider generating email verification token
        // 8. Log user creation for audit purposes
        // 9. Return created user instance
        
        throw new \Exception('Method not implemented yet');
    }

    /**
     * Update an existing user
     */
    public function updateExistingUser(int $userId, array $userData): ?User
    {
        // TODO: Implement updateExistingUser method
        // Steps to implement:
        // 1. Find existing user by ID
        // 2. Return null if user not found
        // 3. Validate update data (email uniqueness if being changed)
        // 4. Hash password if it's being updated
        // 5. Filter out empty/null values if doing partial updates
        // 6. Update user using update() method
        // 7. Handle database exceptions
        // 8. Consider what fields are allowed to be updated
        // 9. Log user updates for audit purposes
        // 10. Refresh and return updated user instance
        
        throw new \Exception('Method not implemented yet');
    }
}