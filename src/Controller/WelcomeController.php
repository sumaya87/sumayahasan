<?php

namespace App\Controller;

use App\Entity\ResumeBio;
use App\Entity\ResumeCertificates;
use App\Entity\ResumeDownloads;
use App\Entity\ResumeEducations;
use App\Entity\ResumeExperiences;
use App\Entity\ResumeSkills;
use App\Entity\ResumeSkillTypes;
use App\Entity\ResumeSocials;
use App\Entity\ResumeTestScores;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{

    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $bio = $em->getRepository(ResumeBio::class)->findOneBy(['status' => true]);
        $socials = $em->getRepository(ResumeSocials::class)->findBy(['status' => true]);
        $experiences = $em->getRepository(ResumeExperiences::class)->findBy(['status' => true], ['roleStartedAt' => 'DESC']);
        $educations = $em->getRepository(ResumeEducations::class)->findBy(['status' => true], ['courseStartedAt' => 'DESC']);
        $certifications = $em->getRepository(ResumeCertificates::class)->findBy(['status' => true]);
        $testScores = $em->getRepository(ResumeTestScores::class)->findBy(['status' => true]);
        $skillTypes = $em->getRepository(ResumeSkillTypes::class)->findBy(['status' => true]);
        $downloads = $em->getRepository(ResumeDownloads::class)->findBy(['status' => true], ['fileOrder' => 'ASC']);

        $data = [
            'first_name'        => $bio->getFirstName(),
            'last_name'         => $bio->getLastName(),
            'location'          => $bio->getLocation(),
            'phone'             => $bio->getPhone(),
            'email'             => $bio->getEmail(),
            'about'             => $bio->getAbout(),
            'interests'         => $bio->getInterests(),
            'socials'           => [],
            'experiences'       => [],
            'educations'        => [],
            'skills'            => [],
            'certificates'      => [],
            'test_scores'       => [],
            'downloads'       => []
        ];

        foreach ($socials as $social){
            $data['socials'][$social->getName()] =  $social->getUrl();
        }
        foreach ($experiences as $experience){
            $data['experiences'][] = [
                'role'              => $experience->getRoleName(),
                'company'           => $experience->getCompanyName(),
                'company_website'   => $experience->getCompanyWebsite(),
                'job_description'   => $experience->getJobDescription(),
                'role_duration'     => $experience->getRoleDuration(),
            ];
        }
        foreach ($educations as $education){
            $data['educations'][] = [
                'institute'              => $education->getInstitute(),
                'certificate_name'       => $education->getDegreeName(),
                'specialization'         => $education->getSpecialization(),
                'gpa'                    => $education->getResult(),
                'study_duration'         => $education->getCourseDuration(),
            ];
        }
        foreach ($skillTypes as $skillType){
            $tmp = [];
            $skills = $em->getRepository(ResumeSkills::class)->findBy(
                ['type' => $skillType->getId(), 'status' => true],
                ['skillDisplayOrder' => 'ASC']
            );
            foreach ($skills as $skill){
                if($skillType->getInlineListStyle()){
                    $tmp[$skill->getSkillName()] = $skill->getDeviconName();
                }
                else{
                    $tmp[] = $skill->getSkillName();
                }
            }
            $data['skills'][] = [
                'type'          => $skillType->getSkillTypeName(),
                'inline_list'   => $skillType->getInlineListStyle(),
                'skill_list'    => $tmp
            ];
        }

        foreach ($certifications as $certificates){
            $data['certificates'][] = [
                'name'                  =>  $certificates->getCertificationName(),
                'licence_no'            =>  $certificates->getLicenceNumber(),
                'authority'             =>  $certificates->getAuthorityName(),
                'validity_period'       =>  $certificates->getCertificationValidityPeriod(),
                'url'                   =>  $certificates->getCertificateURL(),
            ];
        }
        foreach ($testScores as $testScore){
            $data['test_scores'][] = [
                'name'                  =>  $testScore->getTestName(),
                'scored'                =>  $testScore->getScore(),
                'date_taken'            =>  $testScore->getPassedAt(),
                'url'                   =>  $testScore->getTestResultURL(),
            ];
        }

        foreach ($downloads as $download){
            $data['downloads'][] = [
                'name'                  =>  $download->getName(),
                'location'              =>  $download->getFileLocation(),
                'type'                  =>  $download->getFileType(),
                'order'                 =>  $download->getFileOrder()
            ];
        }

        return $this->render('Resume/index.html.twig', [
            'controller_name' => 'WelcomeController',
            'data' => $data
        ]);
    }

//    public function export()
//    {
//        die("test");
//    }
}
