import colors from 'tailwindcss/colors'
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'

export default {
    content: ['./resources/**/*.blade.php', './vendor/filament/**/*.blade.php'],
    theme: {
        extend: {
            fontFamily:{
                roboto: 'Roboto'
            },
            colors: {
                danger: colors.rose,
                primary: {
                    DEFAULT: '#0180A1',
                    50: '#5CDCFE',
                    100: '#47D8FE',
                    200: '#1FD0FE',
                    300: '#02C0F2',
                    400: '#01A0CA',
                    500: '#0180A1',
                    600: '#015469',
                    700: '#002731',
                    800: '#000000',
                    900: '#000000',
                    950: '#000000'
                  },
                success: colors.green,
                warning: colors.yellow,
            },
        },
    },
    plugins: [forms, typography],
}
