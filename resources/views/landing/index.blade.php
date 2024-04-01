<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calmy | Home</title>
    <link rel="stylesheet" href="/public/css/style.css" />
    <link rel="icon" type="image/x-icon" href="/src/icons/favicon.svg" />
    @vite('resources/css/app.css')
  </head>
  <body class="bg-main-bg bg-fixed">
    <header
      class="fixed w-screen backdrop-blur-xl bg-white bg-opacity-5"
      id="navbar"
    >
      <nav class="flex flex-row justify-between px-6 py-6 items-center">
        <div class="items-center">
          <a href="/public/index.html">
            <svg
              width="168.5"
              height="40"
              viewBox="0 0 220 53"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M33.0482 38.7647C31.6418 38.5022 30.3733 37.9459 29.3623 37.1834C27.7839 35.9943 26.8081 34.3063 26.8081 32.404C26.8081 30.5017 27.7839 28.8137 29.3623 27.6246C30.7948 26.5442 32.7454 25.8772 34.872 25.8772C36.9996 25.8772 38.9492 26.5452 40.3817 27.6246C41.9601 28.8137 42.9359 30.5017 42.9359 32.404C42.9359 34.3063 41.9601 35.9943 40.3817 37.1834C39.3707 37.9449 38.1022 38.5022 36.6958 38.7647V43.5079C41.0617 42.7243 42.5958 39.2838 42.6009 39.2728C43.0143 38.3563 44.0927 37.9479 45.0092 38.3603C45.9256 38.7738 46.334 39.8522 45.9206 40.7686C45.9125 40.7878 43.0013 47.3125 34.872 47.3125C26.7427 47.3125 23.8314 40.7868 23.8234 40.7686C23.4099 39.8522 23.8184 38.7738 24.7348 38.3603C25.6512 37.9469 26.7296 38.3563 27.1431 39.2728C27.1481 39.2838 28.6822 42.7243 33.0482 43.5079V38.7647ZM26.3403 0.750029H26.6653H43.0777H43.4026C50.546 0.750029 57.0396 3.67138 61.7455 8.37732C66.4515 13.0833 69.3728 19.5768 69.3728 26.7202L69.3718 26.851L69.3728 27.0462C69.3728 27.1206 69.3708 27.1951 69.3668 27.2675C69.2219 34.1956 66.3318 40.4779 61.7455 45.0631C57.0396 49.7691 50.546 52.6904 43.4026 52.6904H26.3393C19.1959 52.6904 12.7024 49.7691 7.99643 45.0631C3.39511 40.4618 0.499916 34.1514 0.374169 27.194C0.371151 27.1448 0.369141 27.0955 0.369141 27.0452L0.370145 26.85L0.369141 26.7192C0.369141 19.5758 3.29049 13.0823 7.99643 8.37631C12.7024 3.67037 19.1959 0.749023 26.3393 0.749023L26.3403 0.750029ZM10.2599 11.2795C8.00246 13.6285 6.25106 16.4663 5.18574 19.613L15.0946 18.1845C15.5181 18.1232 15.9215 18.094 16.3027 18.094C18.2463 18.094 20.0057 18.7831 21.3578 19.9641C22.7017 21.1391 23.6252 22.7919 23.9039 24.7284C23.9632 25.1439 23.9944 25.5583 23.9944 25.9657C23.9944 28.3258 23.0578 30.5973 21.5489 32.3547C20.0359 34.1172 17.9334 35.3786 15.6066 35.7136L6.43817 36.7991C7.51456 38.9076 8.91588 40.825 10.5757 42.4848C14.6228 46.5319 20.2029 49.0438 26.3403 49.0438H43.4036C49.5411 49.0438 55.1212 46.5319 59.1682 42.4848C60.7697 40.8833 62.1318 39.0404 63.1921 37.0184L54.1374 35.7136C51.8106 35.3786 49.7071 34.1161 48.1951 32.3547C46.6861 30.5973 45.7496 28.3258 45.7496 25.9657C45.7496 25.5573 45.7808 25.1429 45.8411 24.7274C46.1208 22.7909 47.0433 21.1381 48.3872 19.9631C49.7393 18.7821 51.4987 18.093 53.4422 18.093C53.8235 18.093 54.2269 18.1222 54.6504 18.1835L64.5592 19.612C63.4939 16.4653 61.7425 13.6285 59.4841 11.2785C56.0065 11.4043 51.884 11.9103 47.8209 13.2492C43.6099 14.6365 39.4743 16.9231 36.2401 20.62L34.872 22.1833L33.5049 20.62C30.2707 16.9231 26.1361 14.6365 21.9241 13.2492C17.86 11.9103 13.7385 11.4043 10.2599 11.2785V11.2795ZM4.01881 26.848C4.03189 29.1818 4.40812 31.4342 5.09319 33.5498L15.0936 32.1082C16.518 31.903 17.8258 31.1063 18.7855 29.9886C19.7492 28.866 20.3467 27.4345 20.3467 25.9647C20.3467 25.7002 20.3307 25.4587 20.2985 25.2394C20.1476 24.1912 19.6637 23.31 18.9635 22.6983C18.2704 22.0938 17.3449 21.7397 16.3017 21.7397C16.0613 21.7397 15.8289 21.7558 15.6066 21.7869L4.30551 23.4166C4.24314 23.8039 4.18982 24.1983 4.14657 24.5986C4.0681 25.3179 4.02485 26.0674 4.01881 26.847V26.848ZM64.6508 33.5498C65.3369 31.4332 65.7131 29.1808 65.7262 26.848C65.7201 26.0684 65.6769 25.3189 65.5984 24.5996C65.5552 24.1993 65.5018 23.8049 65.4395 23.4176L54.1384 21.7879C53.9161 21.7558 53.6837 21.7407 53.4432 21.7407C52.399 21.7407 51.4746 22.0938 50.7814 22.6994C50.0813 23.311 49.5974 24.1922 49.4465 25.2404C49.4143 25.4587 49.3982 25.7012 49.3982 25.9647C49.3982 27.4345 49.9968 28.866 50.9595 29.9886C51.9192 31.1063 53.227 31.903 54.6514 32.1082L64.6518 33.5498H64.6508ZM15.0272 23.6399C16.0181 23.6399 16.8279 24.4497 16.8279 25.4406V27.8942C16.8279 28.8851 16.0181 29.6949 15.0272 29.6949C14.0363 29.6949 13.2265 28.8851 13.2265 27.8942V25.4406C13.2265 24.4508 14.0363 23.6399 15.0272 23.6399ZM54.7188 23.6399C55.7097 23.6399 56.5195 24.4497 56.5195 25.4406V27.8942C56.5195 28.8851 55.7097 29.6949 54.7188 29.6949C53.7279 29.6949 52.9181 28.8851 52.9181 27.8942V25.4406C52.9181 24.4508 53.7279 23.6399 54.7188 23.6399ZM34.873 4.39769H26.6663C23.6836 4.39769 20.8346 4.98015 18.2282 6.03642C16.9274 6.56355 15.6851 7.20737 14.5161 7.95581C17.2494 8.26968 20.1707 8.83403 23.0639 9.78769C27.2528 11.1679 31.3953 13.3599 34.872 16.7782C38.3486 13.3609 42.4912 11.1679 46.6801 9.78769C49.5733 8.83403 52.4936 8.26968 55.2278 7.95581C54.0589 7.20737 52.8175 6.56355 51.5168 6.03642C48.9103 4.98015 46.0614 4.39769 43.0787 4.39769H34.872H34.873ZM31.5573 34.2761C32.3832 34.8978 33.5542 35.2831 34.873 35.2831C36.1928 35.2831 37.3628 34.8978 38.1887 34.2761C38.8687 33.7641 39.2902 33.0991 39.2902 32.404C39.2902 31.7089 38.8687 31.0439 38.1887 30.5319C37.3628 29.9102 36.1928 29.5249 34.873 29.5249C33.5532 29.5249 32.3822 29.9102 31.5573 30.5319C30.8773 31.0439 30.4568 31.7099 30.4568 32.404C30.4568 33.0991 30.8783 33.7641 31.5573 34.2761Z"
                fill="#4349FF"
              />
              <path
                d="M104.456 41.3504C102.315 42.4016 99.5193 42.9267 96.0749 42.9267C91.6375 42.9267 88.1227 41.6039 85.5152 38.9441C82.9137 36.2913 81.61 32.7553 81.61 28.3321C81.61 23.6814 83.0626 19.8799 85.9759 16.9223C88.8822 13.9648 92.6314 12.485 97.2307 12.485C100.111 12.485 102.517 12.8552 104.457 13.6076V19.6666C102.466 18.4987 100.208 17.9212 97.6915 17.9212C94.8114 17.9212 92.5147 18.8357 90.7895 20.6716C89.0703 22.5135 88.2072 24.9138 88.2072 27.8784C88.2072 30.7645 89.024 33.0933 90.6597 34.8518C92.2944 36.6092 94.5066 37.4914 97.2891 37.4914C99.9157 37.4914 102.303 36.8627 104.457 35.5912V41.3514L104.456 41.3504ZM114.205 22.6684C115.151 22.1363 116.423 21.7087 118.012 21.3778C119.602 21.0468 120.964 20.8848 122.092 20.8848C127.969 20.8848 130.908 23.8293 130.908 29.7203V42.4147H125.076V39.3535H124.999C123.565 41.7407 121.47 42.9277 118.706 42.9277C116.721 42.9277 115.125 42.3634 113.926 41.2286C112.732 40.0929 112.129 38.5497 112.129 36.5971C112.129 32.5692 114.535 30.2273 119.336 29.5724L125.109 28.7878C125.109 26.3422 123.838 25.123 121.295 25.123C118.785 25.123 116.424 25.8825 114.205 27.4005V22.6715V22.6684ZM121.139 32.8911C118.92 33.1829 117.811 34.1818 117.811 35.894C117.811 36.6786 118.084 37.3144 118.622 37.7942C119.16 38.2741 119.887 38.5145 120.795 38.5145C122.053 38.5145 123.084 38.0729 123.895 37.1846C124.706 36.3024 125.108 35.1998 125.108 33.883V32.3781L121.139 32.8901V32.8911ZM140.714 42.4137V11.304H146.831V42.4137H140.714ZM189.934 42.4137H183.811V30.4195C183.811 27.2024 182.643 25.5928 180.295 25.5928C179.205 25.5928 178.304 26.0797 177.577 27.0595C176.856 28.0323 176.493 29.2264 176.493 30.6337V42.4137H170.376V30.2706C170.376 27.151 169.215 25.5938 166.899 25.5938C165.744 25.5938 164.824 26.0606 164.136 26.9951C163.442 27.9226 163.098 29.1549 163.098 30.686V42.4137H156.961V21.3969H163.098V24.6854H163.176C163.909 23.4782 164.882 22.5447 166.102 21.8767C167.315 21.2148 168.599 20.8848 169.941 20.8848C172.893 20.8848 174.91 22.2087 176 24.8544C177.622 22.2077 179.977 20.8848 183.07 20.8848C187.644 20.8848 189.933 23.7066 189.933 29.3561V42.4137H189.934ZM219.467 21.3969L210.801 44.2948C208.788 49.6124 205.774 52.749 201.752 52.749C200.17 52.749 198.944 52.58 198.067 52.2501V47.3329C198.891 47.7997 199.8 48.033 200.786 48.033C202.459 48.033 203.638 46.7524 204.322 45.1308L205.482 42.3744L196.985 21.3959H203.789L207.895 34.5641C208.148 35.3618 208.329 36.2571 208.446 37.243H208.557C208.647 36.575 208.855 35.6928 209.185 34.6033L213.382 21.3959H219.467V21.3969Z"
                fill="#4349FF"
              />
            </svg>
          </a>
        </div>
        <div class="flex flex-row gap-12">
          <ul class="flex flex-row gap-x-8 items-center">
            <li class="text-lg text-primary font-bold">
              <a href="index.html">Home</a>
            </li>
            <li class="text-lg text-black hover:text-primary">
              <a href="features.html">Features</a>
            </li>
            <li class="text-lg text-black hover:text-primary">
              <a href="community.html">Community</a>
            </li>
            <li class="text-lg text-black hover:text-primary">
              <a href="blog.html">Blog</a>
            </li>
            <li class="text-lg text-black hover:text-primary">
              <a href="about.html">About</a>
            </li>
          </ul>
          <a
            href="signin.html"
            class="bg-primary px-12 border-2 border-primary py-2 w-fit rounded-full text-base text-white font-poppins drop-shadow-lg Light hover:bg-transparent hover:text-black"
          >
            Get Started
          </a>
        </div>
      </nav>
    </header>

    <!-- SECTION HERO START -->
    <section class="flex flex-row w-screen h-screen">
      <div class="w-1/2 h-screen flex flex-col p-6 justify-center">
        <h2 class="text-xl font-bold pt-10">#GET TO KNOW ABOUT CALMY</h2>
        <h1 class="text-[42px] font-extrabold">
          Let’s be <span class="text-primary"> Calmy’s Friends</span> and Make
          Ourself
          <span class="text-primary">More Meaningful</span>
        </h1>
        <p class="text-base pt-6 text-justify">
          Calmy is an Anxiety Disorder Education and Consultation Platform with
          talk therapy chatbot uses Artificial Intelligence for undergraduate
          students. Calmy available for both Android and iOS. Get it now and
          let’s be friends :D
        </p>
        <div class="flex flex-row gap-x-8 pt-8">
          <a href="#">
            <div
              class="flex flex-row bg-black px-6 py-2 rounded-xl gap-x-4 items-center hover:bg-grey"
            >
              <img src="/public/icons/google-play.svg" alt="Play" width="32px" />
              <div class="flex flex-col text-white">
                <p class="text-xs">GET IT ON</p>
                <p class="font-medium">Google Play</p>
              </div>
            </div>
          </a>
          <a href="#">
            <div
              class="flex flex-row bg-black px-6 py-2 rounded-xl gap-x-4 items-center hover:bg-grey"
            >
              <img src="/public/icons/apple.svg" alt="Play" width="32px" />
              <div class="flex flex-col text-white">
                <p class="text-xs">DOWNLOAD ON</p>
                <p class="font-medium">App Store</p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="w-1/2 h-screen p-2 items-center pt-10">
        <img src="/public/images/mockup-home.png" alt="" />
      </div>
    </section>
    <!-- SECTION HERO END -->

    <!-- SECTION FEATURES START -->
    <section class="flex flex-row w-screen h-screen bg-bgDark">
      <div class="flex flex-col items-center pt-20 pb-10">
        <div>
          <h2 class="text-sm font-bold text-center">#WE’LL START FROM HERE</h2>
          <h1 class="text-3xl font-extrabold text-center">OUR FEATURES</h1>
          <p class="text-base text-center px-40 py-2">
            Calmy offers various exciting features for you. All of Calmy's
            features will help you get to know more about Anxiety Disorder,
            prevent its symptoms, and assist in managing your symptoms
          </p>
        </div>
        <div class="flex flex-row w-screen">
          <!-- FEATURE CARD CHATBOT START -->
          <div
            class="border-2 border-white bg-gradient-to-t from-white to-transparent w-1/3 p-6 m-6 rounded-xl"
          >
            <img
              src="/public/images/feature-chatbot.svg"
              alt="Chatbot"
              width="96px"
            />
            <h3 class="text-base font-bold pt-6">Voice Chatbot</h3>
            <p class="text-sm pb-6 text-justify">
              Main feature of Calmy, which is a chat feature with a bot that is
              integrated with Artificial Intelligence. In this feature, users
              will be given a different experience by...
            </p>
            <div class="flex flex-row justify-end">
              <a
                href="#"
                class="bg-primary px-4 py-2 rounded-full text-white text-sm hover:bg-primaryDark"
                >Read More</a
              >
            </div>
          </div>
          <!-- FEATURE CARD CHATBOT END -->

          <!-- FEATURE CARD LESSONS START -->
          <div
            class="border-2 border-white bg-gradient-to-t from-white to-transparent w-1/3 p-6 m-6 rounded-xl"
          >
            <img
              src="/public/images/feature-lessons.svg"
              alt="Chatbot"
              width="96px"
            />
            <h3 class="text-base font-bold pt-6">Lessons</h3>
            <p class="text-sm pb-6 text-justify">
              Contains various materials or complete information about mental
              health disorders, anxiety disorders. In this section, users will
              be presented with material equipped...
            </p>
            <div class="flex flex-row justify-end">
              <a
                href="#"
                class="bg-primary px-4 py-2 rounded-full text-white text-sm hover:bg-primaryDark"
                >Read More</a
              >
            </div>
          </div>
          <!-- FEATURE CARD LESSONS END -->

          <!-- FEATURE CARD EXERCISES START -->
          <div
            class="border-2 border-white bg-gradient-to-t from-white to-transparent w-1/3 p-6 m-6 rounded-xl"
          >
            <img
              src="/public/images/feature-exercises.svg"
              alt="Chatbot"
              width="96px"
            />
            <h3 class="text-base font-bold pt-6">Exercises</h3>
            <p class="text-sm pb-6 text-justify">
              Provides various recommendations for positive activity choices
              that can help users maintain mental health. The activities
              provided can also help users to build...
            </p>
            <div class="flex flex-row justify-end">
              <a
                href="#"
                class="bg-primary px-4 py-2 rounded-full text-white text-sm hover:bg-primaryDark"
                >Read More</a
              >
            </div>
          </div>
          <!-- FEATURE CARD EXERCISES END -->
        </div>
        <a href="#">
          <div class="flex flex-row justify-end w-screen px-6 items-center">
            <p class="text-base pr-2">See All Features</p>
            <img src="/public/icons/arrow-right.svg" alt="" width="24px" /></div
        ></a>
      </div>
    </section>
    <!-- SECTION FEATURES END -->

    <!-- SECTION COMMUNITY START -->
    <section class="flex flex-row w-screen h-screen px-6">
      <div class="w-1/2 p-2 items-center pt-24 flex flex-row justify-center">
        <img
          src="/public/images/banner-landing-community.png"
          alt=""
          width="72%"
        />
      </div>
      <div class="w-1/2 h-screen flex flex-col p-6 justify-center">
        <h2 class="text-xl font-bold pt-10">#YOU’RE NOT ALONE</h2>
        <h1 class="text-[42px] font-extrabold">
          FIND NEW FRIENDS ON CALMY COMMUNITY
        </h1>
        <p class="text-base pt-6 text-justify">
          Join our vibrant community today, discover valuable connections,
          chance to make new friends who share your interests, and help your
          problems.
        </p>
        <a
          href="#"
          class="bg-primary px-12 py-3 rounded-full w-fit mt-12 text-white hover:bg-primaryDark"
        >
          Join Now</a
        >
      </div>
    </section>
    <!-- SECTION COMMUNITY END -->

    <!-- SECTION VOLUNTEER START -->
    <section class="flex flex-row w-screen h-screen px-6 bg-bgDark">
      <div class="w-1/2 h-screen flex flex-col p-6 justify-center">
        <h2 class="text-xl font-bold pt-10">#SHARE MORE HAPPINESS</h2>
        <h1 class="text-[42px] font-extrabold">
          BECOME VOLUNTEER & HELP OUR FRIENDS
        </h1>
        <p class="text-base pt-6 text-justify">
          Become a volunteer and make a meaningful difference in lives of those
          battling anxiety disorder. Your compassion and support can be a
          lifeline for others, offering them hope and understanding during their
          journey to recovery.
        </p>
        <a
          href="#"
          class="bg-primary px-12 py-3 rounded-full w-fit mt-12 text-white hover:bg-primaryDark"
        >
          Learn More</a
        >
      </div>
      <div class="w-1/2 flex flex-col justify-center items-center">
        <img
          src="/public/images/banner-volunteer.png"
          alt="Volunteer"
          width="50%"
        />
        <div class="w-1/2 bg-white p-4 flex flex-col rounded-b-xl">
          <div class="flex flex-row gap-x-2">
            <img
              src="/public/images/profile-volunteer.png"
              alt="Profile"
              width="25%"
            />
            <div class="flex flex-col justify-center">
              <h3 class="text-sm font-bold">Olieter Rima Cassie, S.Psi.</h3>
              <p class="text-sm">Psychologist</p>
            </div>
          </div>
          <p class="text-sm text-justify pt-3">
            Hello, my name is Olieter Rima Cassie, S.Psi., you can call me Olie.
            I am a psychologist graduated from Unggul University in 2019. I have
            helped many...
          </p>
          <div class="flex flex-row pt-6 pb-4 gap-x-2 items-center">
            <img src="/public/icons/star-active.svg" alt="Star" width="12%" />
            <img src="/public/icons/star-active.svg" alt="Star" width="12%" />
            <img src="/public/icons/star-active.svg" alt="Star" width="12%" />
            <img src="/public/icons/star-active.svg" alt="Star" width="12%" />
            <img src="/public/icons/star-inactive.svg" alt="Star" width="12%" />
            <p>(4,0)</p>
          </div>
        </div>
      </div>
    </section>
    <!-- SECTION VOLUNTEER END -->

    <!-- SECTION BLOG START -->
    <section class="flex flex-col w-screen pb-32 px-6">
      <div class="flex flex-col items-center pt-32 pb-10">
        <div class="w-screen">
          <h2 class="text-sm font-bold text-center">#LEARN WITH US</h2>
          <h1 class="text-3xl font-extrabold text-center">OUR BLOG</h1>
        </div>
      </div>
      <div class="flex flex-row justify-around">
        <div
          class="w-[48%] p-4 bg-gradient-to-tr from-transparent to-white border-2 border-white rounded-xl flex flex-row gap-x-4"
        >
          <img src="/public/images/blog-1.svg" alt="Blog" width="80%" />
          <div class="flex flex-col justify-center gap-y-4">
            <h3 class="text-lg font-bold">Separation Anxiety</h3>
            <p class="text-base text-justify">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna...
            </p>
            <a href="#" class="text-sm underline text-right">READ MORE</a>
          </div>
        </div>
        <div
          class="w-[48%] p-4 bg-gradient-to-tr from-transparent to-white border-2 border-white rounded-xl flex flex-row gap-x-4"
        >
          <img src="/public/images/blog-1.svg" alt="Blog" width="80%" />
          <div class="flex flex-col justify-center gap-y-4">
            <h3 class="text-lg font-bold">Interpersonal Therapy</h3>
            <p class="text-base text-justify">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna...
            </p>
            <a href="#" class="text-sm underline text-right">READ MORE</a>
          </div>
        </div>
      </div>
      <a href="#" class="flex flex-row justify-end pt-12 items-center">
        <p class="text-base pr-2">See All Blogs</p>
        <img src="/public/icons/arrow-right.svg" alt="" width="24px"
      /></a>
    </section>
    <!-- SECTION BLOG END -->

    <!-- FOOTER START -->
    <footer>
      <div
        class="flex flex-col w-screen h-40 p-6 bg-[#A0A6B81A] justify-between"
      >
        <div class="flex flex-row justify-between">
          <div class="items-center">
            <a href="/public/index.html">
              <svg
                height="32"
                viewBox="0 0 220 53"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M33.0482 38.7647C31.6418 38.5022 30.3733 37.9459 29.3623 37.1834C27.7839 35.9943 26.8081 34.3063 26.8081 32.404C26.8081 30.5017 27.7839 28.8137 29.3623 27.6246C30.7948 26.5442 32.7454 25.8772 34.872 25.8772C36.9996 25.8772 38.9492 26.5452 40.3817 27.6246C41.9601 28.8137 42.9359 30.5017 42.9359 32.404C42.9359 34.3063 41.9601 35.9943 40.3817 37.1834C39.3707 37.9449 38.1022 38.5022 36.6958 38.7647V43.5079C41.0617 42.7243 42.5958 39.2838 42.6009 39.2728C43.0143 38.3563 44.0927 37.9479 45.0092 38.3603C45.9256 38.7738 46.334 39.8522 45.9206 40.7686C45.9125 40.7878 43.0013 47.3125 34.872 47.3125C26.7427 47.3125 23.8314 40.7868 23.8234 40.7686C23.4099 39.8522 23.8184 38.7738 24.7348 38.3603C25.6512 37.9469 26.7296 38.3563 27.1431 39.2728C27.1481 39.2838 28.6822 42.7243 33.0482 43.5079V38.7647ZM26.3403 0.750029H26.6653H43.0777H43.4026C50.546 0.750029 57.0396 3.67138 61.7455 8.37732C66.4515 13.0833 69.3728 19.5768 69.3728 26.7202L69.3718 26.851L69.3728 27.0462C69.3728 27.1206 69.3708 27.1951 69.3668 27.2675C69.2219 34.1956 66.3318 40.4779 61.7455 45.0631C57.0396 49.7691 50.546 52.6904 43.4026 52.6904H26.3393C19.1959 52.6904 12.7024 49.7691 7.99643 45.0631C3.39511 40.4618 0.499916 34.1514 0.374169 27.194C0.371151 27.1448 0.369141 27.0955 0.369141 27.0452L0.370145 26.85L0.369141 26.7192C0.369141 19.5758 3.29049 13.0823 7.99643 8.37631C12.7024 3.67037 19.1959 0.749023 26.3393 0.749023L26.3403 0.750029ZM10.2599 11.2795C8.00246 13.6285 6.25106 16.4663 5.18574 19.613L15.0946 18.1845C15.5181 18.1232 15.9215 18.094 16.3027 18.094C18.2463 18.094 20.0057 18.7831 21.3578 19.9641C22.7017 21.1391 23.6252 22.7919 23.9039 24.7284C23.9632 25.1439 23.9944 25.5583 23.9944 25.9657C23.9944 28.3258 23.0578 30.5973 21.5489 32.3547C20.0359 34.1172 17.9334 35.3786 15.6066 35.7136L6.43817 36.7991C7.51456 38.9076 8.91588 40.825 10.5757 42.4848C14.6228 46.5319 20.2029 49.0438 26.3403 49.0438H43.4036C49.5411 49.0438 55.1212 46.5319 59.1682 42.4848C60.7697 40.8833 62.1318 39.0404 63.1921 37.0184L54.1374 35.7136C51.8106 35.3786 49.7071 34.1161 48.1951 32.3547C46.6861 30.5973 45.7496 28.3258 45.7496 25.9657C45.7496 25.5573 45.7808 25.1429 45.8411 24.7274C46.1208 22.7909 47.0433 21.1381 48.3872 19.9631C49.7393 18.7821 51.4987 18.093 53.4422 18.093C53.8235 18.093 54.2269 18.1222 54.6504 18.1835L64.5592 19.612C63.4939 16.4653 61.7425 13.6285 59.4841 11.2785C56.0065 11.4043 51.884 11.9103 47.8209 13.2492C43.6099 14.6365 39.4743 16.9231 36.2401 20.62L34.872 22.1833L33.5049 20.62C30.2707 16.9231 26.1361 14.6365 21.9241 13.2492C17.86 11.9103 13.7385 11.4043 10.2599 11.2785V11.2795ZM4.01881 26.848C4.03189 29.1818 4.40812 31.4342 5.09319 33.5498L15.0936 32.1082C16.518 31.903 17.8258 31.1063 18.7855 29.9886C19.7492 28.866 20.3467 27.4345 20.3467 25.9647C20.3467 25.7002 20.3307 25.4587 20.2985 25.2394C20.1476 24.1912 19.6637 23.31 18.9635 22.6983C18.2704 22.0938 17.3449 21.7397 16.3017 21.7397C16.0613 21.7397 15.8289 21.7558 15.6066 21.7869L4.30551 23.4166C4.24314 23.8039 4.18982 24.1983 4.14657 24.5986C4.0681 25.3179 4.02485 26.0674 4.01881 26.847V26.848ZM64.6508 33.5498C65.3369 31.4332 65.7131 29.1808 65.7262 26.848C65.7201 26.0684 65.6769 25.3189 65.5984 24.5996C65.5552 24.1993 65.5018 23.8049 65.4395 23.4176L54.1384 21.7879C53.9161 21.7558 53.6837 21.7407 53.4432 21.7407C52.399 21.7407 51.4746 22.0938 50.7814 22.6994C50.0813 23.311 49.5974 24.1922 49.4465 25.2404C49.4143 25.4587 49.3982 25.7012 49.3982 25.9647C49.3982 27.4345 49.9968 28.866 50.9595 29.9886C51.9192 31.1063 53.227 31.903 54.6514 32.1082L64.6518 33.5498H64.6508ZM15.0272 23.6399C16.0181 23.6399 16.8279 24.4497 16.8279 25.4406V27.8942C16.8279 28.8851 16.0181 29.6949 15.0272 29.6949C14.0363 29.6949 13.2265 28.8851 13.2265 27.8942V25.4406C13.2265 24.4508 14.0363 23.6399 15.0272 23.6399ZM54.7188 23.6399C55.7097 23.6399 56.5195 24.4497 56.5195 25.4406V27.8942C56.5195 28.8851 55.7097 29.6949 54.7188 29.6949C53.7279 29.6949 52.9181 28.8851 52.9181 27.8942V25.4406C52.9181 24.4508 53.7279 23.6399 54.7188 23.6399ZM34.873 4.39769H26.6663C23.6836 4.39769 20.8346 4.98015 18.2282 6.03642C16.9274 6.56355 15.6851 7.20737 14.5161 7.95581C17.2494 8.26968 20.1707 8.83403 23.0639 9.78769C27.2528 11.1679 31.3953 13.3599 34.872 16.7782C38.3486 13.3609 42.4912 11.1679 46.6801 9.78769C49.5733 8.83403 52.4936 8.26968 55.2278 7.95581C54.0589 7.20737 52.8175 6.56355 51.5168 6.03642C48.9103 4.98015 46.0614 4.39769 43.0787 4.39769H34.872H34.873ZM31.5573 34.2761C32.3832 34.8978 33.5542 35.2831 34.873 35.2831C36.1928 35.2831 37.3628 34.8978 38.1887 34.2761C38.8687 33.7641 39.2902 33.0991 39.2902 32.404C39.2902 31.7089 38.8687 31.0439 38.1887 30.5319C37.3628 29.9102 36.1928 29.5249 34.873 29.5249C33.5532 29.5249 32.3822 29.9102 31.5573 30.5319C30.8773 31.0439 30.4568 31.7099 30.4568 32.404C30.4568 33.0991 30.8783 33.7641 31.5573 34.2761Z"
                  fill="#4349FF"
                />
                <path
                  d="M104.456 41.3504C102.315 42.4016 99.5193 42.9267 96.0749 42.9267C91.6375 42.9267 88.1227 41.6039 85.5152 38.9441C82.9137 36.2913 81.61 32.7553 81.61 28.3321C81.61 23.6814 83.0626 19.8799 85.9759 16.9223C88.8822 13.9648 92.6314 12.485 97.2307 12.485C100.111 12.485 102.517 12.8552 104.457 13.6076V19.6666C102.466 18.4987 100.208 17.9212 97.6915 17.9212C94.8114 17.9212 92.5147 18.8357 90.7895 20.6716C89.0703 22.5135 88.2072 24.9138 88.2072 27.8784C88.2072 30.7645 89.024 33.0933 90.6597 34.8518C92.2944 36.6092 94.5066 37.4914 97.2891 37.4914C99.9157 37.4914 102.303 36.8627 104.457 35.5912V41.3514L104.456 41.3504ZM114.205 22.6684C115.151 22.1363 116.423 21.7087 118.012 21.3778C119.602 21.0468 120.964 20.8848 122.092 20.8848C127.969 20.8848 130.908 23.8293 130.908 29.7203V42.4147H125.076V39.3535H124.999C123.565 41.7407 121.47 42.9277 118.706 42.9277C116.721 42.9277 115.125 42.3634 113.926 41.2286C112.732 40.0929 112.129 38.5497 112.129 36.5971C112.129 32.5692 114.535 30.2273 119.336 29.5724L125.109 28.7878C125.109 26.3422 123.838 25.123 121.295 25.123C118.785 25.123 116.424 25.8825 114.205 27.4005V22.6715V22.6684ZM121.139 32.8911C118.92 33.1829 117.811 34.1818 117.811 35.894C117.811 36.6786 118.084 37.3144 118.622 37.7942C119.16 38.2741 119.887 38.5145 120.795 38.5145C122.053 38.5145 123.084 38.0729 123.895 37.1846C124.706 36.3024 125.108 35.1998 125.108 33.883V32.3781L121.139 32.8901V32.8911ZM140.714 42.4137V11.304H146.831V42.4137H140.714ZM189.934 42.4137H183.811V30.4195C183.811 27.2024 182.643 25.5928 180.295 25.5928C179.205 25.5928 178.304 26.0797 177.577 27.0595C176.856 28.0323 176.493 29.2264 176.493 30.6337V42.4137H170.376V30.2706C170.376 27.151 169.215 25.5938 166.899 25.5938C165.744 25.5938 164.824 26.0606 164.136 26.9951C163.442 27.9226 163.098 29.1549 163.098 30.686V42.4137H156.961V21.3969H163.098V24.6854H163.176C163.909 23.4782 164.882 22.5447 166.102 21.8767C167.315 21.2148 168.599 20.8848 169.941 20.8848C172.893 20.8848 174.91 22.2087 176 24.8544C177.622 22.2077 179.977 20.8848 183.07 20.8848C187.644 20.8848 189.933 23.7066 189.933 29.3561V42.4137H189.934ZM219.467 21.3969L210.801 44.2948C208.788 49.6124 205.774 52.749 201.752 52.749C200.17 52.749 198.944 52.58 198.067 52.2501V47.3329C198.891 47.7997 199.8 48.033 200.786 48.033C202.459 48.033 203.638 46.7524 204.322 45.1308L205.482 42.3744L196.985 21.3959H203.789L207.895 34.5641C208.148 35.3618 208.329 36.2571 208.446 37.243H208.557C208.647 36.575 208.855 35.6928 209.185 34.6033L213.382 21.3959H219.467V21.3969Z"
                  fill="#4349FF"
                />
              </svg>
            </a>
          </div>
          <ul class="flex flex-row gap-x-8 items-center">
            <li class="text-base text-primary font-bold">
              <a href="index.html">Home</a>
            </li>
            <li class="text-base text-black hover:text-primary">
              <a href="features.html">Features</a>
            </li>
            <li class="text-base text-black hover:text-primary">
              <a href="community.html">Community</a>
            </li>
            <li class="text-base text-black hover:text-primary">
              <a href="blog.html">Blog</a>
            </li>
            <li class="text-base text-black hover:text-primary">
              <a href="about.html">About</a>
            </li>
          </ul>
          <div class="flex flex-row gap-x-6">
            <a href="#">
              <svg
                width="32"
                height="32"
                viewBox="0 0 40 40"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M20.0001 0C14.5683 0 13.8872 0.023043 11.754 0.120336C9.62524 0.21745 8.17139 0.555592 6.8992 1.04991C5.58402 1.56103 4.46867 2.24493 3.35683 3.35677C2.24493 4.46861 1.56103 5.58408 1.04997 6.89926C0.555532 8.17139 0.217509 9.62524 0.120276 11.754C0.0229834 13.8872 0 14.5683 0 20.0001C0 25.4317 0.0229834 26.1128 0.120276 28.246C0.217509 30.3748 0.555532 31.8286 1.04997 33.1007C1.56109 34.4159 2.24499 35.5313 3.35683 36.6432C4.46873 37.7551 5.58402 38.439 6.8992 38.9501C8.17139 39.4444 9.62524 39.7825 11.754 39.8797C13.8872 39.977 14.5683 40 20.0001 40C25.4317 40 26.1128 39.977 28.246 39.8797C30.3748 39.7826 31.8286 39.4444 33.1007 38.9501C34.4159 38.439 35.5313 37.7551 36.6432 36.6432C37.7551 35.5313 38.439 34.4159 38.9501 33.1007C39.4444 31.8286 39.7826 30.3748 39.8797 28.246C39.977 26.1128 40 25.4317 40 20.0001C40 14.5683 39.977 13.8872 39.8797 11.754C39.7826 9.62524 39.4444 8.17139 38.9501 6.89926C38.439 5.58408 37.7551 4.46861 36.6432 3.35677C35.5313 2.24493 34.4159 1.56103 33.1007 1.04991C31.8286 0.555592 30.3748 0.21745 28.246 0.120336C26.1128 0.023043 25.4317 0 20.0001 0ZM20.0001 3.60358C25.3402 3.60358 25.9728 3.624 28.0817 3.72022C30.0317 3.80912 31.0907 4.13494 31.7954 4.40883C32.729 4.77168 33.3952 5.20503 34.095 5.9049C34.795 6.60476 35.2283 7.27104 35.5912 8.20455C35.8651 8.9093 36.1909 9.96832 36.2798 11.9183C36.376 14.0272 36.3964 14.6598 36.3964 20C36.3964 25.3402 36.376 25.9728 36.2798 28.0817C36.1909 30.0317 35.8651 31.0907 35.5912 31.7954C35.2283 32.729 34.795 33.3952 34.095 34.095C33.3952 34.795 32.729 35.2283 31.7954 35.5912C31.0907 35.8651 30.0317 36.1909 28.0817 36.2798C25.9731 36.376 25.3406 36.3964 20 36.3964C14.6594 36.3964 14.027 36.376 11.9183 36.2797C9.96826 36.1909 8.9093 35.8651 8.20461 35.5912C7.27098 35.2283 6.60476 34.795 5.90496 34.095C5.20509 33.3952 4.77168 32.729 4.40883 31.7954C4.13494 31.0907 3.80918 30.0317 3.72022 28.0817C3.624 25.9728 3.60358 25.3402 3.60358 20C3.60358 14.6598 3.624 14.0272 3.72022 11.9183C3.80918 9.96826 4.13494 8.9093 4.40883 8.20461C4.77168 7.27098 5.20509 6.60476 5.9049 5.90496C6.60476 5.20503 7.27104 4.77168 8.20455 4.40883C8.9093 4.13494 9.96832 3.80912 11.9183 3.72022C14.0272 3.624 14.6599 3.60358 20.0001 3.60358Z"
                  fill="#0A0C1C"
                />
                <path
                  d="M20.0001 26.6666C16.3181 26.6666 13.3333 23.6819 13.3333 20C13.3333 16.318 16.3181 13.3332 20.0001 13.3332C23.6819 13.3332 26.6667 16.318 26.6667 20C26.6667 23.6819 23.6819 26.6666 20.0001 26.6666ZM20.0001 9.72965C14.3279 9.72965 9.72974 14.3278 9.72974 20C9.72974 25.6721 14.3279 30.2702 20.0001 30.2702C25.6721 30.2702 30.2703 25.6721 30.2703 20C30.2703 14.3278 25.6721 9.72965 20.0001 9.72965ZM33.0761 9.32387C33.0761 10.6494 32.0015 11.7239 30.676 11.7239C29.3506 11.7239 28.2761 10.6494 28.2761 9.32387C28.2761 7.99839 29.3506 6.92383 30.676 6.92383C32.0015 6.92383 33.0761 7.99839 33.0761 9.32387Z"
                  fill="#0A0C1C"
                />
              </svg>
            </a>
            <a href="#">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 41 40"
                fill="none"
              >
                <g clip-path="url(#clip0_283_39)">
                  <path
                    d="M39.6647 7.40448C39.0364 7.68319 38.3903 7.91842 37.7302 8.10939C38.5117 7.22552 39.1076 6.18552 39.4713 5.04745C39.5529 4.79235 39.4684 4.51313 39.2587 4.34629C39.0493 4.17932 38.7583 4.15932 38.5277 4.29597C37.1258 5.12745 35.6133 5.725 34.0273 6.07442C32.4298 4.51339 30.26 3.625 28.0169 3.625C23.282 3.625 19.4299 7.477 19.4299 12.2117C19.4299 12.5846 19.4535 12.9555 19.5002 13.3211C13.6247 12.8053 8.16242 9.91739 4.41145 5.31623C4.27777 5.15223 4.07184 5.06384 3.861 5.08074C3.65003 5.09726 3.46048 5.21623 3.3539 5.39906C2.59313 6.70448 2.19094 8.19752 2.19094 9.71661C2.19094 11.7856 2.92965 13.7487 4.23455 15.2827C3.83777 15.1453 3.45274 14.9735 3.08526 14.7695C2.88797 14.6597 2.64719 14.6614 2.45119 14.7738C2.25507 14.8862 2.1321 15.0929 2.12694 15.3188C2.12603 15.3569 2.12603 15.3949 2.12603 15.4335C2.12603 18.5219 3.78823 21.3024 6.32952 22.8179C6.11119 22.7961 5.893 22.7645 5.67623 22.7231C5.45274 22.6804 5.22294 22.7587 5.07223 22.9291C4.92126 23.0995 4.87132 23.3369 4.94087 23.5536C5.88152 26.4904 8.30332 28.6505 11.2311 29.3091C8.80281 30.83 6.0259 31.6267 3.11081 31.6267C2.50255 31.6267 1.89081 31.5909 1.2921 31.5201C0.994678 31.4847 0.710291 31.6604 0.609001 31.9432C0.50771 32.2262 0.615065 32.5416 0.868098 32.7038C4.613 35.105 8.94319 36.3742 13.3903 36.3742C22.1327 36.3742 27.6018 32.2516 30.6502 28.7931C34.4515 24.4807 36.6316 18.7727 36.6316 13.1329C36.6316 12.8973 36.628 12.6593 36.6207 12.4222C38.1205 11.2922 39.4117 9.92474 40.4624 8.353C40.622 8.11429 40.6047 7.79881 40.4198 7.57906C40.2352 7.35919 39.9274 7.2881 39.6647 7.40448Z"
                    fill="#0A0C1C"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_283_39">
                    <rect
                      width="40"
                      height="40"
                      fill="white"
                      transform="translate(0.571411)"
                    />
                  </clipPath>
                </defs>
              </svg>
            </a>
            <a href="#">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 41 40"
                fill="none"
              >
                <g clip-path="url(#clip0_283_42)">
                  <path
                    d="M38.5837 8.34132C37.1399 6.62493 34.474 5.9248 29.3829 5.9248H10.9023C5.69469 5.9248 2.98373 6.6701 1.54527 8.49745C0.142822 10.2791 0.142822 12.9043 0.142822 16.5376V23.4626C0.142822 30.5014 1.80682 34.0753 10.9023 34.0753H29.3831C33.798 34.0753 36.2445 33.4575 37.8272 31.9427C39.4503 30.3895 40.1428 27.8533 40.1428 23.4626V16.5376C40.1428 12.706 40.0343 10.0653 38.5837 8.34132ZM25.823 20.9562L17.431 25.3421C17.2433 25.4402 17.0382 25.4888 16.8333 25.4888C16.6013 25.4888 16.3698 25.4264 16.1648 25.3022C15.7787 25.0683 15.543 24.6498 15.543 24.1985V15.4547C15.543 15.0042 15.778 14.5861 16.1633 14.352C16.5488 14.118 17.0281 14.102 17.428 14.3097L25.82 18.6674C26.247 18.8891 26.5151 19.3298 26.5157 19.8107C26.5162 20.292 26.2493 20.7334 25.823 20.9562Z"
                    fill="#0A0C1C"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_283_42">
                    <rect
                      width="40"
                      height="40"
                      fill="white"
                      transform="translate(0.142822)"
                    />
                  </clipPath>
                </defs>
              </svg>
            </a>
          </div>
        </div>
        <hr class="bg-white h-[2px]" />
        <p class="text-center">©️2023 • Made With ♥️ by Tiwai</p>
      </div>
    </footer>
    <!-- FOOTER END -->

    <script>
      var lastScrollTop;
      navbar = document.getElementById("navbar");
      window.addEventListener("scroll", function () {
        var scrollTop =
          window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
          navbar.style.top = "-100px";
        } else {
          navbar.style.top = "0";
        }
        lastScrollTop = scrollTop;
      });
    </script>
  </body>
</html>
