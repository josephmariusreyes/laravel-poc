<?php

namespace App\Services\Contracts;

use App\Models\User;

interface UserServiceInterface
{
    /**
     * Get user information by ID
     * 
     * TODO: Implement this method to:
     * - Validate the user ID parameter
     * - Retrieve user from database
     * - Handle case when user is not found
     * - Return user data in appropriate format
     * - Consider what user information should be returned (exclude sensitive data)
     */
    public function getUserInfo(int $userId): ?User;

    /**
     * Create a new user
     * 
     * TODO: Implement this method to:
     * - Validate input data (email uniqueness, required fields, etc.)
     * - Hash password if provided
     * - Create user in database
     * - Handle database constraints and errors
     * - Return the created user or appropriate response
     * - Consider sending welcome email or other side effects
     */
    public function createNewUser(array $userData): User;

    /**
     * Update an existing user
     * 
     * TODO: Implement this method to:
     * - Validate the user exists
     * - Validate input data for updates
     * - Handle partial updates (only provided fields)
     * - Hash password if being updated
     * - Update user in database
     * - Handle unique constraint violations
     * - Return updated user or appropriate response
     * - Consider audit logging for user changes
     */
    public function updateExistingUser(int $userId, array $userData): ?User;
}