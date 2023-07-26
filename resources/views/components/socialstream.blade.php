<div class="flex flex-row items-center justify-between py-4 text-rifleGreen">
    <hr class="w-full mr-2 border-deer">
    {{ __('Or') }}
    <hr class="w-full ml-2 border-deer">
</div>

<div class="flex items-center justify-center">
    @if (JoelButcher\Socialstream\Socialstream::hasFacebookSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::facebook()]) }}" class="flex items-center justify-center w-full px-4 py-2 mt-2 space-x-3 text-sm text-center bg-[#1877F2] text-white transition-colors duration-200 transform border rounded-lg dark:text-gray-300 dark:border-gray-300 hover:bg-gray-600 dark:hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>
            @if (request()->routeIs('register'))
                <span class="text-sm text-white dark:text-gray-200">{{__('Sign in with Facebook')}}</span>
                <span class="sr-only">Facebook</span>
            @else
                <span class="text-sm text-white dark:text-gray-200">{{__('Login in with Facebook')}}</span>
                <span class="sr-only">Facebook</span>
            @endif
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasGoogleSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::google()]) }}" >
            <x-socialstream-icons.google class="h-6 w-6 mx-2" />
            <span class="sr-only">Google</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasTwitterOAuth1Support())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::twitter()]) }}">
            <x-socialstream-icons.twitter class="h-6 w-6 mx-2" />
            <span class="sr-only">Twitter</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasTwitterOAuth2Support())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::twitterOAuth2()]) }}">
            <x-socialstream-icons.twitter class="h-6 w-6 mx-2" />
            <span class="sr-only">Twitter</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasLinkedInSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::linkedin()]) }}">
            <x-socialstream-icons.linkedin class="h-6 w-6 mx-2" />
            <span class="sr-only">LinkedIn</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasGithubSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::github()]) }}">
            <x-socialstream-icons.github class="h-6 w-6 mx-2" />
            <span class="sr-only">GitHub</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasGitlabSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::gitlab()]) }}">
            <x-socialstream-icons.gitlab class="h-6 w-6 mx-2" />
            <span class="sr-only">GitLab</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasBitbucketSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::bitbucket()]) }}">
            <x-socialstream-icons.bitbucket />
            <span class="sr-only">BitBucket</span>
        </a>
    @endif
</div>
