/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */
import * as Popper from '@popperjs/core'
import * as FilePond from 'filepond';

window.Popper = Popper

import 'bootstrap'
import axios from 'axios';

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const csrfToken = document.querySelector('[name="_token"]').value;

FilePond.create(document.querySelector('input[id="excel-upload"]'));
FilePond.setOptions({
    server: {
        url: '/upload',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
        }
    }
});
