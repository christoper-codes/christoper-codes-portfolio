export const contactSchema = {
    name(value) {
        if (!value) {
          return 'This field is required';
        }
        return true;
    },
    email(value) {
        if (!value) {
          return 'This field is required';
        }

        const regex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
        if (!regex.test(value)) {
          return 'Invalid email address';
        }
        return true;
    },
    description(value) {
        if (!value) {
          return 'This field is required';
        }
        return true;
    }
}
