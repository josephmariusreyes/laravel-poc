<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Contracts\UserServiceInterface;

class UserController extends Controller
{
    protected UserServiceInterface $userService;

    /**
     * Constructor - Inject UserService via dependency injection
     */
    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Get user information
     */
    public function getUserInfo(int $id)
    {
        // TODO: Implement getUserInfo controller method
        // Steps to implement:
        // 1. Use $this->userService->getUserInfo($id) to get user
        // 2. Handle case when user is not found (return 404)
        // 3. Transform user data for API response if needed
        // 4. Return JSON response with user data
        // 5. Add proper HTTP status codes
        // 6. Consider adding request validation
        
        throw new \Exception('Method not implemented yet');
    }

    /**
     * Create a new user
     */
    public function createNewUser(Request $request)
    {
        // TODO: Implement createNewUser controller method
        // Steps to implement:
        // 1. Create form request validation class for user creation
        // 2. Validate incoming request data
        // 3. Use $this->userService->createNewUser($request->validated()) 
        // 4. Handle service exceptions (duplicate email, validation errors)
        // 5. Return JSON response with created user data
        // 6. Return appropriate HTTP status code (201 Created)
        // 7. Consider returning user without sensitive data
        
        throw new \Exception('Method not implemented yet');
    }

    /**
     * Update an existing user
     */
    public function updateExistingUser(Request $request, int $id)
    {
        // TODO: Implement updateExistingUser controller method
        // Steps to implement:
        // 1. Create form request validation class for user updates
        // 2. Validate incoming request data
        // 3. Use $this->userService->updateExistingUser($id, $request->validated())
        // 4. Handle case when user is not found (return 404)
        // 5. Handle service exceptions (duplicate email, validation errors)
        // 6. Return JSON response with updated user data
        // 7. Return appropriate HTTP status code (200 OK)
        // 8. Consider partial updates (PATCH vs PUT)
        
        throw new \Exception('Method not implemented yet');
    }
}