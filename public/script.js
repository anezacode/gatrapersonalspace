document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById("form");
    const nama = document.getElementById("name");
    const email = document.getElementById("email");
    const subject = document.getElementById("subject");
    const mess = document.getElementById("message");

    const icon = `
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
            </svg>`;
            
    const submit = document.getElementById("send");
    submit.removeAttribute('disabled');

    let isSending = false;

    function showNotif(pesan, durasi = 1500) {
        let notif = document.getElementById("warns");
        if (!notif) {
            notif = document.createElement("div");
            notif.id = "warns";
            notif.style.position = "fixed";
            notif.style.top = "20px";
            notif.style.left = "50%";
            notif.style.width = "90%";
            notif.style.maxWidth = "400px";
            notif.style.transform = "translateX(-50%)";
            notif.style.background = "#222";
            notif.style.color = "#fff";
            notif.style.padding = "10px";
            notif.style.borderRadius = "8px";
            notif.style.zIndex = "9999";
            notif.style.display = "none";
            document.body.appendChild(notif);
        }
        notif.innerHTML = icon + '<span style="margin-left:5px;">' + pesan + '</span>';
        notif.style.display = "flex";
        notif.style.alignItems = "center";
        setTimeout(() => {
            notif.style.display = "none";
        }, durasi);
    }

    document.addEventListener('DOMContentLoaded', () => {
        if (mess) mess.setAttribute('maxlength', '1000');
    });

    function sendEmail(e) {
        if (e) e.preventDefault();

        if (isSending) {
            showNotif("Please wait a moment.", 1500);
            return false;
        }

        if (!nama.value.trim() || !email.value.trim() || !subject.value.trim() || !mess.value.trim()) {
            showNotif("Fields cannot be empty.", 1500);
            return false;
        }

        const reg = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!reg.test(email.value.trim())) {
            showNotif("Please input the valid email.", 1500);
            return false;
        }

        const xnama = `
            <tr>
            <td style="padding: 8px 0; font-weight: 600; color: #374151;">Name</td>
            <td style="padding: 8px 0; color: #1f2937;">: ${nama.value.trim()}</td>
            </tr>`;
        const xemail = `
            <tr>
            <td style="padding: 8px 0; font-weight: 600; color: #374151;">Email</td>
            <td style="padding: 8px 0; color: #1f2937;">: ${email.value.trim()}</td>
            </tr>`;
        const xsubject = `
            <tr>
            <td style="padding: 8px 0; font-weight: 600; color: #374151;">Subject</td>
            <td style="padding: 8px 0; color: #1f2937;">: ${subject.value.trim()}</td>
            </tr>`;
        const xmess = `
            <tr>
            <td style="padding: 8px 0; vertical-align: top; font-weight: 600; color: #374151;">Message</td>
            <td style="padding: 8px 0;">
                <div style="background-color: #f9fafb; padding: 12px 16px; border-radius: 8px; color: #111827; line-height: 1.5; width: 300px;">
                ${mess.value.trim().replace(/\n/g, "<br>")}
                </div>
            </td>
            </tr>`;
    
        const body = `
            <div style="font-family: 'Outfit', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background-color: #ffffff; color: #111827; border-radius: 12px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08); padding: 32px 24px; max-width: 560px; margin: auto;">
                <h2 style="margin-bottom: 24px; color: #111827; font-size: 20px; font-weight: 700;">📬 A Message from Your Website</h2>
                <table style="width: 100%; font-size: 16px; border-spacing: 0;">
                    ${xnama}
                    ${xemail}
                    ${xsubject}
                    ${xmess}
                </table>
                <hr style="margin: 32px 0 16px 0; border: none; border-top: 1px solid #e5e7eb;">
                <div style="font-size: 14px; color: #6b7280; text-align: center;">This email was sent from <a href="http://gatra.rf.gd/">gatra.rf.gd</a></div>
            </div>
        `;
        
        const emailConfig = {
            Host: "smtp.elasticemail.com",
            Port: 2525,
            Username: "anezacode@gmail.com",
            Password: "3BA30A1F1E6A688E5507AAA589B5D311B4E8",
            To: 'anezacode@gmail.com',
            From: "anezacode@gmail.com",
            Subject: subject.value.trim(),
            Body: body
        };

        isSending = true;

        Email.send(emailConfig)
            .then(message => {
                setNotif();
            })
            .catch(error => {
                showNotif("An unexpected error has occurred, please try again.", 2000);
            })
            .finally(() => {
                isSending = false;
            });

        return false;
    }

    function setNotif() {
        showNotif("Form has been sent! page will referesh...", 2500);
        setTimeout(() => {
            window.location.reload();
        }, 2500);
    }

    if (form) {
        form.addEventListener("submit", sendEmail);
    }
});
